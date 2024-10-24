<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\FriendRequest;
use App\Models\User;
use Auth;
use App\Services\FCMService;
use App\Helpers\HelperClass;
use App\Models\Notification;

class FriendsController extends Controller
{
   
    
    public function add_request(Request $request)
         {
        $user = auth()->user();
        $friendId = $request->input('friend_id');
    
        // Check if the friend id is valid
        $friend = User::find($friendId);
        if (!$friend) {
            return response()->json(['message' => 'Invalid friend id'], 404);
        }
    
        // Check if the friendship already exists
        $existingFriendship = FriendRequest::where(function ($query) use ($user, $friendId) {
            $query->where('user_id', $user->id)->where('friend_id', $friendId);
        })->orWhere(function ($query) use ($user, $friendId) {
            $query->where('user_id', $friendId)->where('friend_id', $user->id);
        })->first();
    
        if ($existingFriendship) {
            return response()->json(['message' => 'Friend request already sent'], 400);
        }
    
        // Create a new friendship request
        $friendship = new FriendRequest();
        $friendship->user_id = $user->id;
        $friendship->friend_id = $friendId;
        $friendship->save();
    
        if ($friendship) {
            $friend = User::find($friendship->friend_id);
            $friendDeviceToken = $friend->fcm_token;
           
        }
    
        if ($friendDeviceToken) {
            $token = $friendDeviceToken;
            $notification = [
                'title' => 'Friend Request',
                'body' => 'You have received a friend request from ' . $user->name,
                'data' => [
                    'type' => 'Friend_Request',
                    'id' => $friendId,
                    'user_id' => $user->id,
                    'profile_picture' => $user->profile_picture,
                    'designation' => $user->designation,
                ],
            ];
            $data = [
                'type' => 'friend_request',
                'id' => $friendId,
                'user_id' => $user->id,
                'profile_picture' => $user->profile_picture,
                'designation' => $user->designation,
            ];
            $recipientId = $friend->id;
            $notifiableType = 'App\\Models\\User';
            $notifyId = $friendship->id;
            $title = 'Request';
            $message = 'You have received a friend request from ' . $user->name;
    
            $notificationData = [
                'type' => 'Friend_Request',
                'id' => $friendId,
                'user_id' => $user->id,
                'profile_picture' => $user->profile_picture,
                'designation' => $user->designation,
            ];
    
            $notification_create = Notification::create([
                'title' => $title,
                'message' => $message,
                'recipient_id' => $recipientId,
                'notifiable_type' => $notifiableType,
                'notify_id' => $notifyId,
                'data' => json_encode($notificationData),
                'read_at' => null,
            ]);
    
            $response = FCMService::sendNotification($token, $notification, $data);
            
            $img1 = url('/assets/images/1.png');
            $img2 = url('/assets/images/2.png');
             
            $email = $user->email;
            $name = $user->name;
            $otp = '';
            $sub = 'Welcome to sipmaa';
            /*$msg = '<html lang="en">

                    <head>
                        <meta charset="UTF-8">
                        <meta http-equiv="X-UA-Compatible" content="IE=edge">
                        <meta name="viewport" content="width=device-width, initial-scale=1.0">
                        <title>Friend Request</title>
                    </head>
                    
                    <body style="height: auto;width: 595px;margin: auto;background-color:#f1f1f1;padding:40px;">
                        <section style="height: auto;width:100%;margin: auto;background-color:#fff;padding:25px 0px 40px 0;box-shadow: 0px 2px 25px 10px #4f94cb;">
                            <div>
                                <div style="">
                                    <img src="https://sipmaaindia.com/assets/images/logo.png" width="25%" ;="" height="auto" alt="" srcset="">
                                </div>
                                <hr style="border: 1px solid #ededed; width:100%;">
                                <h1 align="center" style="font-size:30px; font-weight:900;line-height:40px;">Friend_Request!</h1>
                                <p align="center" style="line-height:40px;">'.$message.'</p>
                                <div align="center">
                                    <a href="http://web.sipmaaindia.com/sign-in">
                                        <button style="background:#4587b6;color:white;width: 50%; height: 30px; border: none; border-radius: 20px;">
                                            LOGIN
                                        </button>
                                    </a>
                                </div>
                            </div>
                        </section>
                    </body>
                    
                    </html>';*/
                    
                    
            $msg = '<html lang="en">
                    	<head>
                    		<meta charset="UTF-8">
                    		<meta http-equiv="X-UA-Compatible" content="IE=edge">
                    		<meta name="viewport" content="width=device-width, initial-scale=1.0">
                    		<title>Friend Request</title>
                    	</head>
                    	
                    	<body style="height: auto;width: 595px;margin: auto;background-color:#f1f1f1;padding:40px;">
                    		<section style="height: auto;width:100%;margin: auto;background-color:#fff;padding:20px 0px 25px 0;box-shadow: 0px 2px 25px 10px #4f94cb;">
                    			<div>
                    				<div style="">
                    					<img src="https://sipmaaindia.com/assets/images/logo.png" width="25%" ;="" height="auto" alt="" srcset="">
                    				</div>
                    				<hr style="border: 1px solid #ededed; width:100%;"> 
                    				<h1 align="center" style="font-size:30px; font-weight:900;line-height:20px;">Friend Request</h1>
                    	
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
        
            // Send email using Mail facade
            $sendinBlueMail = HelperClass::forgetpasswordMail($email, $name, $otp, $sub, $msg);

        }
    
        return response()->json(['message' => 'Friend request sent']);
    }
    
    public function cancel_request(){
        
        
     $friendRequestId = $request->input('friend_id'); 
    $friendRequest = FriendRequest::where('friend_id', $friendRequestId)
        ->where('user_id', auth()->user()->id)
        ->first();

    // Check if the friend request exists
    if (!$friendRequest) {
        return response()->json([
            'message' => 'Friend request not found or you are not authorized to cancel this request.'
        ], 404);
    }

    // Delete the friend request
    $friendRequest->delete();

    return response()->json([
        'message' => 'Friend request cancelled successfully.'
    ], 200);
        
    }
    
    
    public function respond_request(Request $request)
    {
        $user = auth()->user();
        $friendId = $request->input('friend_id');
        $status = $request->status;
    
        // Find the corresponding friendship record
        $friendship = FriendRequest::where('user_id', $friendId)
            ->where('friend_id', $user->id)
            ->where('accepted', 0)
            ->first();
    
        if (!$friendship) {
            return response()->json(['message' => 'Friend request not found'], 404);
        }
    
        // Update the friendship status to confirmed
        $friendship->accepted = $status;
        $friendship->save();
    
        if ($friendship) {
            $requester = User::find($friendId);
            $requesterDeviceToken = $requester->fcm_token;
        }
    
        if (!empty($requesterDeviceToken)) {
            $notification = [
                'title' => 'Friend Request Accepted',
                'body' => 'Your friend request has been accepted by ' . $user->name,
                'data' => [
                    'type' => 'Friend_Request_accepted',
                    'id' => $friendId,
                    'user_id' => $user->id,
                    'profile_picture' => $user->profile_picture,
                    'designation' => $user->designation,
                ],
            ];
    
            $data = [
                'type' => 'Friend_Request_accepted',
                'id' => $friendId,
                'user_id' => $user->id,
                'profile_picture' => $user->profile_picture,
                'designation' => $user->designation,
            ];
    
            $recipientId = $requester->id;
            $notifiableType = 'App\\Models\\User';
            $notifyId = $friendship->id;
            $title = 'Accepted';
            $message = 'Your friend request has been accepted by ' . $user->name;
    
            $notificationData = [
                'type' => 'Friend_Request_accepted',
                'id' => $friendId,
                'user_id' => $user->id,
                'profile_picture' => $user->profile_picture,
                'designation' => $user->designation,
            ];
    
            $notification_create = Notification::create([
                'title' => $title,
                'message' => $message,
                'recipient_id' => $recipientId,
                'notifiable_type' => $notifiableType,
                'notify_id' => $notifyId,
                'data' => json_encode($notificationData),
                'read_at' => null,
            ]);
    
            try {
                $response = FCMService::sendNotification($requesterDeviceToken, $notification, $data);
                // Handle the response as needed
            } catch (\Exception $e) {
                // Handle the exception, e.g., log an error or return a response with an error message
                return response()->json(['message' => 'Error sending notification to the requester'], 500);
            }
        }
    
        // Send notification to the accepting user as well
        $acceptingUserDeviceToken = $user->fcm_token;
        if (!empty($acceptingUserDeviceToken)) {
            $notification = [
                'title' => 'Friend Request Accepted',
                'body' => 'Your accepted a friend request from ' . $requester->name,
                'data' => [
                    'type' => 'Friend_Request_accepted',
                    'id' => $user->id,
                    'user_id' => $requester->id,
                    'profile_picture' => $requester->profile_picture,
                    'designation' => $requester->designation,
                ],
            ];
    
            $data = [
                'type' => 'Friend_Request_accepted',
                'id' => $user->id,
                'user_id' => $requester->id,
                'profile_picture' => $requester->profile_picture,
                'designation' => $requester->designation,
            ];
    
            $recipientId = $user->id;
            $notifiableType = 'App\\Models\\User';
            $notifyId = $friendship->id;
            $title = 'Friend Request Accepted';
            $message = 'You accepted a friend request from ' . $requester->name;
    
            $notificationData = [
                'type' => 'Friend_Request_accepted',
                'id' => $user->id,
                'user_id' => $requester->id,
                'profile_picture' => $requester->profile_picture,
                'designation' => $requester->designation,
            ];
    
            $notification_create = Notification::create([
                'title' => $title,
                'message' => $message,
                'recipient_id' => $recipientId,
                'notifiable_type' => $notifiableType,
                'notify_id' => $notifyId,
                'data' => json_encode($notificationData),
                'read_at' => null,
            ]);
    
            try {
                $response = FCMService::sendNotification($acceptingUserDeviceToken, $notification, $data);
                // Handle the response as needed
            } catch (\Exception $e) {
                // Handle the exception, e.g., log an error or return a response with an error message
                return response()->json(['message' => 'Error sending notification to the accepting user'], 500);
            }
        }
    
        return response()->json(['message' => 'Friend request updated']);
    }
    
    
   

   
    

    public function friends_list(Request $request)
    {

        $user = auth()->user();

        $friends = FriendRequest::where(function ($query) use ($user) {
            $query->where('user_id', $user->id)
                ->where('accepted', 1);
        })
            ->orWhere(function ($query) use ($user) {
                $query->where('friend_id', $user->id)
                    ->where('accepted', 1);
            })
            ->orWhere(function ($query) use ($user) {
                $query->where('user_id', $user->id)
                    ->where('accepted', 0);
            })
            ->orWhere(function ($query) use ($user) {
                $query->where('friend_id', $user->id)
                    ->where('accepted', 0);
            })
            ->get();

        $friendList = [];
        foreach ($friends as $friend) {
            if ($friend->user_id == $user->id) {
                $friendUser = User::find($friend->friend_id);
            } else {
                $friendUser = User::find($friend->user_id);
            }
            
            if(!empty($friendUser)) {
                
                 $friendList[] = [
                        'friend_id' => isset($friendUser->id) ? $friendUser->id : '',
                        'name' => $friendUser->name,
                        'email' => $friendUser->email,
                        'profile' => $friendUser->profile_picture,
                        'designation' => $friendUser->designation,
                        'status' => $friend->accepted,
                    ];
                
            }
           
        }

        return response()->json(['friend_list' => $friendList]);
    }

    public function friends_list_recive(Request $request)
    {
        $user = auth()->user();

        $friendRequests = FriendRequest::where('friend_id', $user->id)
            ->where('accepted', 0)
            ->get();

        $friendRequestList = [];
        foreach ($friendRequests as $friendRequest) {
            $friend = User::find($friendRequest->user_id);
            $friendRequestList[] = [
                'friend_id' => $friend->id,
                'name' => $friend->name,
                'email' => $friend->email,
                'profile' => $friend->profile_picture,
                'designation' => $friend->designation,

            ];
        }

        return response()->json(['friend_request_list' => $friendRequestList]);
    }



    public function friends_search(Request $request)
    {
        $user = auth()->user();

        $search = $request->input('name');

        $friends = User::where('name', 'LIKE', "%{$search}%")
            ->orWhere('email', 'LIKE', "%{$search}%")
            ->get();

        $friendList = [];
        foreach ($friends as $friend) {
            if ($friend->id == $user->id) {
                continue; // Exclude the authenticated user from the list
            }

            $status = FriendRequest::where(function ($query) use ($user, $friend) {
                $query->where('user_id', $user->id)
                    ->where('friend_id', $friend->id);
            })
                ->orWhere(function ($query) use ($user, $friend) {
                    $query->where('user_id', $friend->id)
                        ->where('friend_id', $user->id);
                })
                ->pluck('accepted')
                ->first();

            $isFriend = false;
            if ($status == 1) {
                $isFriend = true;
            }

            if ($status == 0) {
                $isFriend_list = false;
            }

            $friendList[] = [
                'friend_id' => $friend->id,
                'name' => $friend->name,
                'email' => $friend->email,
                'profile' => $friend->profile_picture,
                'designation' => $friend->designation,
                'is_friend' => $isFriend,
                'is_request_list' => $isFriend_list,
            ];
        }

        return response()->json([
            'friend_list' => $friendList,
        ]);
    }
}
