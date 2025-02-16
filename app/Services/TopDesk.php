<?php

declare(strict_types=1);

namespace App\Services;

use App\Models\User;
use Innovaat\Topdesk\Api;
use Illuminate\Support\Facades\Cache;

final readonly class TopDesk
{
    /**
     * The TopDesk API instance.
     */
    private Api $api;

    /**
     * Create a new TopDesk instance.
     */
    public function __construct()
    {
        $user = User::first();

        $this->api = new Api($user->topdesk_url);
        $this->api->useApplicationPassword($user->topdesk_username, $user->topdesk_password);
    }

    /**
     * Get the total number of open incidents.
     */
    public function getTotalOpenIncidents(): int
    {
        $result = Cache::remember('getTotalOpenIncidents', 60, function () {
            $incidents = [];

            $start = 0;
            $page_size = 150;
            $incrementBy = 150;

            while ($start < $page_size) {
                $newIncidents = $this->api->getListOfIncidents([
                    'start' => $start,
                    'page_size' => $page_size,
                    'fields' => 'id,number',
                    'query' => 'completed==false',
                ]);

                $incidents = array_merge($incidents, $newIncidents);

                $start += $page_size;
                $page_size += $incrementBy;
            }
            
            return $incidents;
        });

        return count($result);
    }
}
