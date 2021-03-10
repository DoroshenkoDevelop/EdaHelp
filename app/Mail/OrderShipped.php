<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class OrderShipped extends Mailable
{
    use Queueable, SerializesModels;

    protected $email;
    protected $name;
    protected $category;
    protected $recipe;
    protected $image;



    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($email,$name,$category,$recipe,$image)
    {
        $this->email = $email;
        $this->name = $name;
        $this->category = $category;
        $this->recipe = $recipe;
        $this->image = $image;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('mail.mail')
           ->with([
                'email' => $this->email,
                'name' => $this->name,
                'category' => $this->category,
                'recipe' => $this->recipe,
                'image' => $this->image,
            ])
           ->subject('New Message');
    }
}
