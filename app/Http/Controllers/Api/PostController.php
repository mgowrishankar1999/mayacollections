<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Storage;
use App\Models\Posts;
use App\Models\Vote;
use App\Models\Reports;
use App\Models\Comments;
use App\Models\Slider;
use App\Services\FCMService;
use App\Models\Notification;
use Illuminate\Support\Facades\Validator;
use Auth;
use App\Helpers\HelperClass;


class PostController extends Controller
{

    public function get_post(Request $request)
    {
        $user = auth()->user();
        $user_id = $request->user()->id;
        $posts = Posts::where('status',1)->where('department_id', $user->department)
            ->orderBy('id', 'desc')->with('user', 'likes', 'comments')
            ->get()->map(function ($post) use ($user_id) {
                $like_count = $post->likes->where('type', 'like')->count();
                $liked_by_user = $post->likes->where('user_id', $user_id)
                    ->where('type', 'like')->first() ? true : false;
                $comment_count = $post->comments->count();
                return [
                    'id' => $post->id,
                    'title' => $post->title,
                    'created_at' => $post->created_at,
                    'body' => $post->media_url,
                    'user' => $post->user,
                    'like_count' => $like_count,
                    'liked_by_user' => $liked_by_user,
                    'comment' => $comment_count
                ];
            });

        return response()->json([
            'message' => 'success',
            'posts' => $posts
        ], 200);
    }

    public function filter_post(Request $request)
    {
        $user_id = $request->user()->id;
        $department_id = $request->department_id;
        $posts = Posts::where('status',1)->where('department_id', $department_id)->orderBy('id', 'desc')->with('user', 'likes', 'comments')->get()->map(function ($post) use ($user_id) {
            $like_count = $post->likes->where('type', 'like')->count();
            $liked_by_user = $post->likes->where('user_id', $user_id)->where('type', 'like')->first() ? true : false;
            $comment_count = $post->comments->count();
            return [
                'id' => $post->id,
                'title' => $post->title,
                'created_at' => $post->created_at,
                'body' => $post->media_url,
                'user' => $post->user,
                'like_count' => $like_count,
                'liked_by_user' => $liked_by_user,
                'comment' => $comment_count
            ];
        });

        return response()->json([
            'message' => 'success',
            'posts' => $posts
        ], 200);
    }

    public function get_my_post(Request $request)
    {
        $userId = Auth::id();
        $user_id = Auth::id();
        $posts = Posts::where('status',1)->where('user_id', $userId)->with('user', 'likes', 'comments')->get()->map(function ($post) use ($user_id) {
            $like_count = $post->likes->where('type', 'like')->count();
            $liked_by_user = $post->likes->where('user_id', $user_id)->where('type', 'like')->first() ? true : false;
            $comment_count = $post->comments->count();
            return [
                'id' => $post->id,
                'title' => $post->title,
                'body' => $post->media_url,
                'user' => $post->user,
                'like_count' => $like_count,
                'liked_by_user' => $liked_by_user,
                'comment' => $comment_count
            ];
        });

        return response()->json([
            'message' => 'success',
            'posts' => $posts
        ], 200);
    }


    public function create_post(Request $request)
    {
        $user = auth()->user();

        $post = new Posts;
        $post->user_id = $user->id;
        $post->department_id = $user->department;
        $post->title = ucfirst($request->input('title'));
        $post->description = ucfirst($request->input('description'));

        if ($request->hasFile('media')) {
            $media = $request->file('media');
            $filename = time() . '_' . $media->getClientOriginalName();
            $path = $media->move(public_path('assets/user/media'), $filename);
            $url = url('/assets/user/media/' . $filename);
            $post->media_url = $url;
        }

        $post->save();

        $friends = User::join('friendships', function ($join) {
            $join->on('users.id', '=', 'friendships.friend_id')
                ->where('friendships.user_id', Auth::user()->id);
        })
            ->get();

        foreach ($friends as $friend) {
            $token = $friend->fcm_token;
            $notification = [
                'title' => 'New Post',
                'body' => $post->user->name . ' has posted an update',
            ];
            $data = [
                'type' => 'create_Post',
                'id' => $post->id,
                'user_id' => $post->user->id,
                'profile_picture' => $post->user->profile_picture,
                'designation' => $post->user->designation,
            ];

            $title = 'Posted';
            $message = $post->user->name . ' has posted an update';
            $postData = json_encode($data);
            $postId = $post->id;

            $notification_create = Notification::create([
                'title' => $title,
                'message' => $message,
                'recipient_id' => $friend->id,
                'notifiable_type' => 'App\\Models\\User',
                'notify_id' => $postId,
                'data' => $postData,
                'read_at' => null,
            ]);

            $response = FCMService::sendNotification($token, $notification, $data);

            // Send the email
            $email = $friend->email;
            $name = $friend->name;
            $otp = ''; // Enter the OTP value here
            $sub = 'Create post';
            
            $img1 = url('/assets/images/1.png');
            $img2 = url('/assets/images/2.png');
            
           /* $msg = '<html lang="en">
                    <head>
                        <meta charset="UTF-8">
                        <meta http-equiv="X-UA-Compatible" content="IE=edge">
                        <meta name="viewport" content="width=device-width, initial-scale=1.0">
                        <title>Create post</title>
                    </head>
                    <body style="height: auto;width: 595px;margin: auto;background-color:#f1f1f1;padding:40px;">
                        <section style="height: auto;width:100%;margin: auto;background-color:#fff;padding:25px 0px 40px 0;box-shadow: 0px 2px 25px 10px #4f94cb;">
                            <div>
                                <div style="">
                                    <img src="https://sipmaaindia.com/assets/images/logo.png" width="25%" ;="" height="auto" alt="" srcset="">
                                </div>
                                <hr style="border: 1px solid #ededed; width:100%;">
                                 <p style="line-height:0px;padding-left: 25px; ">Dear Leader,</p>
                                <h1 align="center" style="font-size:30px; font-weight:900;line-height:40px;">New Post!</h1>
                                <p align="center" style="line-height:40px;">' . $message . '</p>
                                <div align="center">
                <a href="http://web.sipmaaindia.com/sign-in">
                    <button style="background:#4587b6;color:white;width: 50%; height: 30px; border: none; border-radius: 20px;">
                        LOGIN
                    </button>
                </a>
            </div>
                            </div>
                            <p style="line-height:40px;padding-left: 25px; ">Regards,</p>
                            <h4 style="line-height:0px;padding-left: 25px;font-weight:600; ">Team SIPMAA </h4>
                        </section>
                    </body>
                    </html>';
                    */
                    
            $msg = '<html lang="en">
                    	<head>
                    		<meta charset="UTF-8">
                    		<meta http-equiv="X-UA-Compatible" content="IE=edge">
                    		<meta name="viewport" content="width=device-width, initial-scale=1.0">
                    		<title>Create post</title>
                    	</head>
                    	
                    	<body style="height: auto;width: 595px;margin: auto;background-color:#f1f1f1;padding:40px;">
                    		<section style="height: auto;width:100%;margin: auto;background-color:#fff;padding:20px 0px 25px 0;box-shadow: 0px 2px 25px 10px #4f94cb;">
                    			<div>
                    				<div style="">
                    					<img src="https://sipmaaindia.com/assets/images/logo.png" width="25%" ;="" height="auto" alt="" srcset="">
                    				</div>
                    				<hr style="border: 1px solid #ededed; width:100%;"> 
                    				<p style="line-height:0px;padding-left: 25px; ">Dear Leader,</p>
                    				<h1 align="center" style="font-size:30px; font-weight:900;line-height:20px;">Create Post!</h1>
                    	
                    				<p align="center" style="line-height:20px;">'.$message.'</p>
                    				<div align="center">
                    					<a href="http://web.sipmaaindia.com/sign-in">
                    						<button style="background:#4587b6;color:white;width: 50%; height: 30px; border: none; border-radius: 20px;">
                    							LOGIN
                    						</button>
                    					</a>
                    				</div>
                    				 
                    
                    				<hr style="border: 1px solid #ededed; width:100%;">
                    
                    				<h3 align="center" style="font-size:18px; font-weight:900;line-height:20px;">Never miss an update with the <span  style="color: #4587b6;" >Sipmaa </span> app</h3>
                    				<div align="center" >
                    					<img src="'.$img1.'" width="20%" ;="" height="auto" alt="" srcset="">
                    					<img src="'.$img2.'" width="18%" ;="" height="auto" alt="" srcset="">
                    				</div>
                    				<p align="left" style="line-height:10px; padding-left: 20px;"><span  style="color: #4587b6;" >Learn why we included this.</span></p>
                    				<p align="left" style="line-height:10px; padding-left: 20px;">You are receiving <span  style="color: #4587b6;" >SIPMAA</span> notification emails</span></p>
                    				<p align="left" style="line-height:10px; padding-left: 20px;"><span  style="color: #4587b6;" >Unsubscribe. Help</span></span></p>
                    				<img style="line-height:10px; padding-left: 20px;" src="https://sipmaaindia.com/assets/images/logo.png" width="15%" ;="" height="auto" alt="" srcset="">
                    				<p align="left" style="line-height:10px; padding-left: 20px;">© 2023 Sipmaa Corporation, Chennai.</p>
                    
                    			</div>
                    		</section>
                    	</body>
                    </html>';
            
            
            
            $sendinBlueMail = HelperClass::forgetpasswordMail($email, $name, $otp, $sub, $msg);
        }

        return response()->json([
            'message' => 'Post created successfully',
            'post' => $post
        ], 201);
    }


    public function update_post(Request $request)
    {
        $post = Posts::findorfail($request->id);
        $post->title = ucfirst($request->input('title'));
        $post->description = ucfirst($request->input('description'));

        if ($request->hasFile('media')) {
            $media = $request->file('media');
            $filename = time() . '_' . $media->getClientOriginalName(); // create a unique filename to prevent conflicts
            $path = $media->move(public_path('assets/user/media'), $filename); // save the media file in public/media folder
            $url = url('/assets/user/media/' . $filename); // get the url of the saved media file
            $post->media_url = $url;
        }

        $post->save();

        return response()->json([
            'message' => 'Post updated successfully',
            'post' => $post
        ], 201);
    }

    public function delete_post(Request $request)
    {
        $post = Posts::find($request->id);
        if (!$post) {
            return response()->json(['message' => 'Post not found'], 404);
        }
        $post->delete();
        return response()->json(['message' => 'Post deleted']);
    }

    public function post_search(Request $request)
    {
        $searchQuery = $request->title;
        $posts = Posts::where('status',1)->where('title', 'LIKE', '%' . $searchQuery . '%')->get();
        return response()->json(['posts' => $posts]);
    }

    public function post_like(Request $request)
    {
        $postId = $request->id;
        $post = Posts::findOrFail($postId);
        $like = $post->likes()->where('user_id', Auth::id())->first();

        if ($like) {
            $like->delete();
        } else {
            $post->likes()->create([
                'user_id' => Auth::id(),
                'type' => 'like'
            ]);
            if ($post->user->id != Auth::id()) {
                $token = $post->user->fcm_token;
                $notification = [
                    'title' => 'Like your post',
                    'body' => Auth::user()->name . ' has liked your post',
                ];
                $data = [
                    'type' => 'like_Post',
                    'id' => $post->id,
                    'user_id' => $post->user->id,
                    'profile_picture' => $post->user->profile_picture,
                    'designation' => $post->user->designation,
                ];
                $title = 'Liked';
                $message = Auth::user()->name . " has liked your post";
                $postData = json_encode($data);

                $notification_create = Notification::create([
                    'title' => $title,
                    'message' => $message,
                    'recipient_id' => $post->user->id,
                    'notifiable_type' => 'App\\Models\\User',
                    'notify_id' => $post->id,
                    'data' => $postData,
                    'read_at' => null,
                ]);

                $response = FCMService::sendNotification($token, $notification, $data);

                // Send the email
                $email = $post->user->email;
                $name = $post->user->name;
                $otp = ''; // Enter the OTP value here
                $sub = 'Like post';
              /*  $msg = '<html lang="en">
                            <head>
                                <meta charset="UTF-8">
                                <meta http-equiv="X-UA-Compatible" content="IE=edge">
                                <meta name="viewport" content="width=device-width, initial-scale=1.0">
                                <title>New Like on Your Post</title>
                            </head>
                            <body style="height: auto;width: 595px;margin: auto;background-color:#f1f1f1;padding:40px;">
                                <section style="height: auto;width:100%;margin: auto;background-color:#fff;padding:25px 0px 40px 0;box-shadow: 0px 2px 25px 10px #4f94cb;">
                                    <div>
                                        <div style="">
                                            <img src="https://sipmaaindia.com/assets/images/logo.png" width="25%" ;="" height="auto" alt="" srcset="">
                                        </div>
                                        <hr style="border: 1px solid #ededed; width:100%;">
                                         <p style="line-height:0px;padding-left: 25px; ">Dear Leader,</p>
                                        <h1 align="center" style="font-size:30px; font-weight:900;line-height:40px;">New Like on Your Post!</h1>
                                        <p align="center" style="line-height:40px;">' . $message . '</p>
                                        <div align="center">
                <a href="http://web.sipmaaindia.com/sign-in">
                    <button style="background:#4587b6;color:white;width: 50%; height: 30px; border: none; border-radius: 20px;">
                        LOGIN
                    </button>
                </a>
            </div>
                                    </div>
                                    <p style="line-height:40px;padding-left: 25px; ">Regards,</p>
                                    <h4 style="line-height:0px;padding-left: 25px;font-weight:600; ">Team SIPMAA </h4>
                                </section>
                            </body>
                            </html>'; */
                            
            $img1 = url('/assets/images/1.png');
            $img2 = url('/assets/images/2.png');
                            
            $msg = '<html lang="en">
                    	<head>
                    		<meta charset="UTF-8">
                    		<meta http-equiv="X-UA-Compatible" content="IE=edge">
                    		<meta name="viewport" content="width=device-width, initial-scale=1.0">
                    		<title>Like post</title>
                    	</head>
                    	
                    	<body style="height: auto;width: 595px;margin: auto;background-color:#f1f1f1;padding:40px;">
                    		<section style="height: auto;width:100%;margin: auto;background-color:#fff;padding:20px 0px 25px 0;box-shadow: 0px 2px 25px 10px #4f94cb;">
                    			<div>
                    				<div style="">
                    					<img src="https://sipmaaindia.com/assets/images/logo.png" width="25%" ;="" height="auto" alt="" srcset="">
                    				</div>
                    				<hr style="border: 1px solid #ededed; width:100%;"> 
                    				<p style="line-height:0px;padding-left: 25px; ">Dear Leader,</p>
                    				<h1 align="center" style="font-size:30px; font-weight:900;line-height:20px;">New Like on Your Post!</h1>
                    	
                    				<p align="center" style="line-height:20px;">'.$message.'</p>
                    				<div align="center">
                    					<a href="http://web.sipmaaindia.com/sign-in">
                    						<button style="background:#4587b6;color:white;width: 50%; height: 30px; border: none; border-radius: 20px;">
                    							LOGIN
                    						</button>
                    					</a>
                    				</div>
                    				 
                    
                    				<hr style="border: 1px solid #ededed; width:100%;">
                    
                    				<h3 align="center" style="font-size:18px; font-weight:900;line-height:20px;">Never miss an update with the <span  style="color: #4587b6;" >Sipmaa </span> app</h3>
                    				<div align="center" >
                    					<img src="'.$img1.'" width="20%" ;="" height="auto" alt="" srcset="">
                    					<img src="'.$img2.'" width="18%" ;="" height="auto" alt="" srcset="">
                    				</div>
                    				<p align="left" style="line-height:10px; padding-left: 20px;"><span  style="color: #4587b6;" >Learn why we included this.</span></p>
                    				<p align="left" style="line-height:10px; padding-left: 20px;">You are receiving <span  style="color: #4587b6;" >SIPMAA</span> notification emails</span></p>
                    				<p align="left" style="line-height:10px; padding-left: 20px;"><span  style="color: #4587b6;" >Unsubscribe. Help</span></span></p>
                    				<img style="line-height:10px; padding-left: 20px;" src="https://sipmaaindia.com/assets/images/logo.png" width="15%" ;="" height="auto" alt="" srcset="">
                    				<p align="left" style="line-height:10px; padding-left: 20px;">© 2023 Sipmaa Corporation, Chennai.</p>
                    
                    			</div>
                    		</section>
                    	</body>
                    </html>';                
                $sendinBlueMail = HelperClass::forgetpasswordMail($email, $name, $otp, $sub, $msg);
            }
        }

        return response()->json([
            'message' => 'success',
            'post' => $post
        ], 201);
    }

    public function post_comment(Request $request)
    {
        $postId = $request->post_id;
        $post = Posts::find($postId);

        if (!$post) {
            return response()->json([
                'message' => 'Post not found'
            ], 404);
        }

        $post_save = new Comments;
        $post_save->user_id = ucfirst($request->input('user_id'));
        $post_save->posts_id = ucfirst($request->input('post_id'));
        $post_save->comment = ucfirst($request->input('comment'));
        $post_save->save();

        if ($post->user->id != Auth::id()) {
            $token = $post->user->fcm_token;
            $notification = [
                'title' => 'Comment on your post',
                'body' => Auth::user()->name . ' has commented on your post ',
            ];
            $data = [
                'type' => 'comment_Post',
                'id' => $post->id,
                'user_id' => $post->user->id,
                'profile_picture' => $post->user->profile_picture,
                'designation' => $post->user->designation,
            ];

            $title = 'Commented';
            $message = Auth::user()->name . " has commented on your post ";
            $postData = json_encode($data);

            $notification_create = Notification::create([
                'title' => $title,
                'message' => $message,
                'recipient_id' => $post->user->id,
                'notifiable_type' => 'App\\Models\\User',
                'notify_id' => $post->id,
                'data' => $postData,
                'read_at' => null,
            ]);

            $response = FCMService::sendNotification($token, $notification, $data);

            // Send the email
            $email = $post->user->email;
            $name = $post->user->name;
            $sub = 'New Comment on Your Post';
            $otp = '';
            
            $img1 = url('/assets/images/1.png');
            $img2 = url('/assets/images/2.png');
            
          /*  $msg = '<html lang="en">
                    <head>
                        <meta charset="UTF-8">
                        <meta http-equiv="X-UA-Compatible" content="IE=edge">
                        <meta name="viewport" content="width=device-width, initial-scale=1.0">
                        <title>New Comment on Your Post</title>
                    </head>
                    
                    <body style="height: auto;width: 595px;margin: auto;background-color:#f1f1f1;padding:40px;">
                        <section style="height: auto;width:100%;margin: auto;background-color:#fff;padding:25px 0px 40px 0;box-shadow: 0px 2px 25px 10px #4f94cb;">
                            <div>
                                <div style="">
                                    <img src="https://sipmaaindia.com/assets/images/logo.png" width="25%" ;="" height="auto" alt="" srcset="">
                                </div>
                                <hr style="border: 1px solid #ededed; width:100%;">
                                 <p style="line-height:0px;padding-left: 25px; ">Dear Leader,</p>
                                <h1 align="center" style="font-size:30px; font-weight:900;line-height:40px;">New Comment on Your Post!</h1>
                                <p align="center" style="line-height:40px;">' . $message . '</p>
                                <div align="center">
                <a href="http://web.sipmaaindia.com/sign-in">
                    <button style="background:#4587b6;color:white;width: 50%; height: 30px; border: none; border-radius: 20px;">
                        LOGIN
                    </button>
                </a>
            </div>
                            </div>
                            <p style="line-height:40px;padding-left: 25px; ">Regards,</p>
                            <h4 style="line-height:0px;padding-left: 25px;font-weight:600; ">Team SIPMAA </h4>
                        </section>
                    </body>
                    
                    </html>'; */
                    
            $msg = '<html lang="en">
                    	<head>
                    		<meta charset="UTF-8">
                    		<meta http-equiv="X-UA-Compatible" content="IE=edge">
                    		<meta name="viewport" content="width=device-width, initial-scale=1.0">
                    		<title>New Comment on Your Post</title>
                    	</head>
                    	
                    	<body style="height: auto;width: 595px;margin: auto;background-color:#f1f1f1;padding:40px;">
                    		<section style="height: auto;width:100%;margin: auto;background-color:#fff;padding:20px 0px 25px 0;box-shadow: 0px 2px 25px 10px #4f94cb;">
                    			<div>
                    				<div style="">
                    					<img src="https://sipmaaindia.com/assets/images/logo.png" width="25%" ;="" height="auto" alt="" srcset="">
                    				</div>
                    				<hr style="border: 1px solid #ededed; width:100%;"> 
                    				<p style="line-height:0px;padding-left: 25px; ">Dear Leader,</p>
                    				<h1 align="center" style="font-size:30px; font-weight:900;line-height:20px;">New Comment on Your Post</h1>
                    	
                    				<p align="center" style="line-height:20px;">'.$message.'</p>
                    				<div align="center">
                    					<a href="http://web.sipmaaindia.com/sign-in">
                    						<button style="background:#4587b6;color:white;width: 50%; height: 30px; border: none; border-radius: 20px;">
                    							LOGIN
                    						</button>
                    					</a>
                    				</div>
                    				 
                    
                    				<hr style="border: 1px solid #ededed; width:100%;">
                    
                    				<h3 align="center" style="font-size:18px; font-weight:900;line-height:20px;">Never miss an update with the <span  style="color: #4587b6;" >Sipmaa </span> app</h3>
                    				<div align="center" >
                    					<img src="'.$img1.'" width="20%" ;="" height="auto" alt="" srcset="">
                    					<img src="'.$img2.'" width="18%" ;="" height="auto" alt="" srcset="">
                    				</div>
                    				<p align="left" style="line-height:10px; padding-left: 20px;"><span  style="color: #4587b6;" >Learn why we included this.</span></p>
                    				<p align="left" style="line-height:10px; padding-left: 20px;">You are receiving <span  style="color: #4587b6;" >SIPMAA</span> notification emails</span></p>
                    				<p align="left" style="line-height:10px; padding-left: 20px;"><span  style="color: #4587b6;" >Unsubscribe. Help</span></span></p>
                    				<img style="line-height:10px; padding-left: 20px;" src="https://sipmaaindia.com/assets/images/logo.png" width="15%" ;="" height="auto" alt="" srcset="">
                    				<p align="left" style="line-height:10px; padding-left: 20px;">© 2023 Sipmaa Corporation, Chennai.</p>
                    
                    			</div>
                    		</section>
                    	</body>
                    </html>';        

            $sendinBlueMail = HelperClass::forgetpasswordMail($email, $name, $otp, $sub, $msg);
        }

        return response()->json([
            'message' => 'Comment updated successfully'
        ], 200);
    }

    public function post_report(Request $request)
    {

        $postId = $request->post_id;
        $post = Posts::find($postId);

        if (!$post) {
            return response()->json([
                'message' => 'Post not found'
            ], 404);
        }
        $post_save = new Reports;
        $post_save->user_id = ucfirst($request->input('user_id'));
        $post_save->post_id = ucfirst($request->input('post_id'));
        $post_save->comment = ucfirst($request->input('comment'));
        $post_save->save();

        return response()->json([
            'message' => 'Report updated successfully'
        ], 200);
    }

    public function post_like_list(Request $request)
    {


        $likes = Vote::where('posts_id', $request->id)->get();
        if (empty($likes)) {
            return response()->json(['message' => 'No lists found']);
        }

        foreach ($likes as $use) {

            $get_name = User::where('id', $use['user_id'])->first();
            $use['user_name'] = !empty($get_name['name']) ? $get_name['name'] : '';
            $use['last_name'] = !empty($get_name['last_name']) ? $get_name['last_name'] : '';
            $use['designation'] = !empty($get_name['designation']) ? $get_name['designation'] : '';
            $use['email'] = !empty($get_name['email']) ? $get_name['email'] : '';
            $use['picture'] = !empty($get_name['profile_picture']) ? $get_name['profile_picture'] : '';
        }

        return response()->json([
            'message' => 'likes list',
            'likes_list' => $likes
        ], 201);
    }

    public function post_comments_list(Request $request)
    {

        $comments = Comments::where('posts_id', $request->id)->get();
        if (empty($comments)) {
            return response()->json(['message' => 'No lists found']);
        }

        foreach ($comments as $use) {

            $get_name = User::where('id', $use['user_id'])->first();
            $use['user_name'] = !empty($get_name['name']) ? $get_name['name'] : '';
            $use['last_name'] = !empty($get_name['last_name']) ? $get_name['last_name'] : '';
            $use['designation'] = !empty($get_name['designation']) ? $get_name['designation'] : '';
            $use['email'] = !empty($get_name['email']) ? $get_name['email'] : '';
            $use['picture'] = !empty($get_name['profile_picture']) ? $get_name['profile_picture'] : '';
        }

        return response()->json([
            'message' => 'comment list',
            'comments_list' => $comments
        ], 201);
    }


    public function get_slider(Request $request)
    {

        $Get_list = Slider::where('status', 1)->orderBy('id', 'desc')->get();
        return response()->json([
            'message' => 'slider',
            'slider_list' => $Get_list
        ], 201);
    }

    public function get_notifications(Request $request)
    {
        $notifiableType = 'App\\Models\\User'; // Replace with your notifiable model class
        $user = Auth::user();

        $notifications = Notification::where('notifiable_type', $notifiableType)
            ->where('recipient_id', $user->id) // Filter by the recipient ID (user ID)
            ->orderBy('created_at', 'desc')
            ->get();

        $unreadNotificationsCount = Notification::where('notifiable_type', $notifiableType)
            ->where('recipient_id', $user->id)
            ->whereNull('read_at')
            ->count();

        // Decode the JSON data field in each notification
        $decodedNotifications = $notifications->map(function ($notification) {
            $notification->data = json_decode($notification->data, true);
            return $notification;
        });

        return response()->json([
            'message' => 'notifications',
            'list' => $decodedNotifications,
            'count' => $unreadNotificationsCount
        ], 201);
    }
    public function mark_notification_as_read(Request $request)
    {
        $notificationId = $request->input('notification_id');
        $notification = Notification::findOrFail($notificationId);

        // Mark the notification as read
        $notification->read_at = now();
        $notification->save();

        // Check if $notification->data is an array or object before accessing its elements
        $data = is_array($notification->data) ? $notification->data : json_decode($notification->data, true);

        return response()->json([
            'message' => 'Notification marked as read',
            'data' => [
                'type' => $data['type'] ?? null,
                'id' => $data['id'] ?? null,
                // 'user_id' => $data['user_id'] ?? null,
                // 'profile_picture' => $data['profile_picture'] ?? null,
                'designation' => $data['designation'] ?? null,
                'title' => $notification->title,
                'message' => $notification->message,
                'recipient_id' => $notification->recipient_id,
                'notifiable_type' => $notification->notifiable_type,
                'notify_id' => $notification->notify_id,
                'read_at' => $notification->read_at,
            ]
        ], 200);
    }


    public function get_fcm(Request $request)
    {
        $id = $request->id;
        $data = User::where('id', $id)->pluck('fcm_token');
        return response()->json([
            'message' => 'notifications',
            'list' => $data
        ], 201);
    }
}
