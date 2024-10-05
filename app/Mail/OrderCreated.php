<?php

namespace App\Mail;

use App\Models\Order;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Address;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class OrderCreated extends Mailable
{
    use Queueable, SerializesModels;

    public $order;

    /**
     * Create a new message instance.
     */
    public function __construct(Order $order)
    {
        $this->order = $order;
    }

    /**
     * Get the message envelope.
     */
    public function envelope(): Envelope
    {
        return new Envelope(
            from: new Address('info@cheap-essay-writing.co.uk', 'Cheap Essay Writing'),
            subject: 'Order Successfully Placed',
        );
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        $email = $this->from('info@cheap-essay-writing.co.uk', 'Cheap Essay Writing') // Specify the sender email and name
                        ->bcc(['umarwaqas2007@gmail.com', 'info@cheap-essay-writing.co.uk'])
                        ->subject('Order Successfully Placed')
                        ->view('emails.order_created')
                        ->with(['order' => $this->order]);

        // Attach files
        $attachments = json_decode($this->order->attachment, true);

        if (is_array($attachments) && count($attachments) > 0) {
            foreach ($attachments as $filePath) {
                $fullPath = public_path($filePath);
                if (file_exists($fullPath)) {
                    $email->attach($fullPath, [
                        'as' => basename($fullPath),
                        'mime' => mime_content_type($fullPath),
                    ]);
                }
            }
        } else {
            \Log::warning("No attachments found or invalid attachments.");
        }

        return $email;
    }
}
