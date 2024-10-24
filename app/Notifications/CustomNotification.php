<?php



namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;


class CustomNotification extends Notification implements ShouldQueue
{

    use Queueable;
    private $data;
    protected $from_user;


    /**
     * Create a new notification instance.
     */
    public function __construct($data, $from_user)
    {

        $this->data = $data;
        $this->from_user = $from_user;
    }

    /**
     * Get the notification's delivery channels.
     *
     * @return array<int, string>
     */
    public function via(object $notifiable): array
    {
        // return ['database', 'mail'];
        return ['database'];
    }

    /**
     * Get the mail representation of the notification.
     */
    // public function toMail(object $notifiable): MailMessage
    // {

    //     return (new MailMessage)
    //         ->line('The introduction to the notification.')
    //         ->action('Notification Action', url('/'))
    //         ->line('Thank you for using our application!');
    // }

    public function toDatabase($notifiable)
    {

        return [

            'type' => 'custom',
            'data' => json_encode($this->toArray($notifiable)),
        ];
    }

    /**
     * Get the array representation of the notification.
     *
     * @return array<string, mixed>
     */
    public function toArray(object $notifiable): array
    {
        return [
            'data' => $this->data,
            'from_user_id' =>  $this->from_user

        ];
    }
}
