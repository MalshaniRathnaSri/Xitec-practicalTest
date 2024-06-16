<?php

namespace App\Events;

use Illuminate\Contracts\Broadcasting\ShouldBroadcastNow;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Queue\SerializesModels;
use App\Models\PrescriptionModel;
use Illuminate\Broadcasting\Channel;

class PrescriptionUpload implements ShouldBroadcastNow
{
    use Dispatchable, SerializesModels;

    public $prescription;

    public function __construct(PrescriptionModel $prescription)
    {
        $this->prescription = $prescription;
    }

     /**
     * Get the channels the event should broadcast on.
     *
     * @return \Illuminate\Broadcasting\Channel|array
     */
    
    public function broadcastOn()
    {
        return new Channel('my-channel');
    }

     /**
     * Get the data to broadcast.
     *
     * @return array
     */

    public function broadcastWith()
    {
        return [
            'patientName' => $this->prescription->patientName,
        ];
    }

     /**
     * Get the name of the event.
     *
     * @return string
     */

    public function broadcastAs()
    {
        return 'my-event';
    }
}
