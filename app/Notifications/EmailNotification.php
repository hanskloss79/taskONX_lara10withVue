<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class EmailNotification extends Notification
{
    use Queueable;

    /**
     * Create a new notification instance.
     *
     * @return void
     */
    /**
     * @var array $infoForAdmin
     */
    
     protected $infoForAdmin;
    
    public function __construct($infoForAdmin)
    {
        $this->infoForAdmin = $infoForAdmin;
    }

    /**
     * Get the notification's delivery channels.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function via($notifiable)
    {
        return ['mail'];
    }

    /**
     * Get the mail representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return \Illuminate\Notifications\Messages\MailMessage
     */
    public function toMail($notifiable)
    {
        return (new MailMessage)
                    ->from('hans_nowy@poczta.onet.pl','Piotr Handzlik')
                    ->line('Do bazy został wprowadzony użytkownik nr ' . $this->infoForAdmin['id'])
                    ->line('Imię:' . $this->infoForAdmin['firstname'])
                    ->line('Nazwisko:' . $this->infoForAdmin['lastname'])
                    ->line('Email:' . $this->infoForAdmin['email'])
                    ->line('Thank you for using our application!');
    }

    /**
     * Get the array representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function toArray($notifiable)
    {
        return [
            //
        ];
    }
}
