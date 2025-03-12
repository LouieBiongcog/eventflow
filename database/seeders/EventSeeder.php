<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Event;

class EventSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Event::insert([
            [
                'title' => 'Tech Conference 2025',
                'description' => 'A conference about the latest in technology.',
                'location' => 'San Francisco, CA',
                'start_time' => '2025-06-15 09:00:00',
                'end_time' => '2025-06-15 17:00:00',
                'capacity' => 500,
            ],
            [
                'title' => 'Music Festival',
                'description' => 'A live music festival featuring top artists.',
                'location' => 'Los Angeles, CA',
                'start_time' => '2025-07-20 15:00:00',
                'end_time' => '2025-07-21 02:00:00',
                'capacity' => 10000,
            ],
            [
                'title' => 'Business Workshop',
                'description' => 'A workshop for entrepreneurs and business leaders.',
                'location' => 'New York, NY',
                'start_time' => '2025-08-10 10:00:00',
                'end_time' => '2025-08-10 16:00:00',
                'capacity' => 200,
            ],
            [
                'title' => 'AI & Machine Learning Expo',
                'description' => 'Explore the latest trends in AI and ML technologies.',
                'location' => 'Chicago, IL',
                'start_time' => '2025-09-05 09:00:00',
                'end_time' => '2025-09-05 18:00:00',
                'capacity' => 800,
            ],
            [
                'title' => 'Startup Pitch Night',
                'description' => 'Watch startups pitch their ideas to investors.',
                'location' => 'Seattle, WA',
                'start_time' => '2025-10-12 18:00:00',
                'end_time' => '2025-10-12 22:00:00',
                'capacity' => 300,
            ],
            [
                'title' => 'Health & Wellness Fair',
                'description' => 'Learn about fitness, nutrition, and mental health.',
                'location' => 'Austin, TX',
                'start_time' => '2025-11-18 10:00:00',
                'end_time' => '2025-11-18 16:00:00',
                'capacity' => 500,
            ],
            [
                'title' => 'Photography Workshop',
                'description' => 'Enhance your photography skills with hands-on training.',
                'location' => 'Denver, CO',
                'start_time' => '2025-12-02 09:00:00',
                'end_time' => '2025-12-02 15:00:00',
                'capacity' => 150,
            ],
            [
                'title' => 'Gaming Convention',
                'description' => 'Experience the future of gaming with top developers.',
                'location' => 'Las Vegas, NV',
                'start_time' => '2026-01-25 12:00:00',
                'end_time' => '2026-01-27 20:00:00',
                'capacity' => 5000,
            ],
            [
                'title' => 'Coding Bootcamp',
                'description' => 'A 3-day immersive bootcamp for aspiring developers.',
                'location' => 'Boston, MA',
                'start_time' => '2026-02-10 08:00:00',
                'end_time' => '2026-02-12 17:00:00',
                'capacity' => 200,
            ],
            [
                'title' => 'Finance & Investing Summit',
                'description' => 'Learn how to build wealth and invest wisely.',
                'location' => 'Miami, FL',
                'start_time' => '2026-03-07 09:00:00',
                'end_time' => '2026-03-07 17:00:00',
                'capacity' => 1000,
            ],
            [
                'title' => 'E-Commerce Growth Conference',
                'description' => 'Strategies to scale your online business.',
                'location' => 'Dallas, TX',
                'start_time' => '2026-04-15 10:00:00',
                'end_time' => '2026-04-15 16:00:00',
                'capacity' => 700,
            ],
            [
                'title' => 'Film & Media Festival',
                'description' => 'A celebration of independent films and media innovations.',
                'location' => 'Los Angeles, CA',
                'start_time' => '2026-05-22 18:00:00',
                'end_time' => '2026-05-24 23:00:00',
                'capacity' => 1200,
            ],
            [
                'title' => 'Space Exploration Meetup',
                'description' => 'Discuss the future of space travel and astronomy.',
                'location' => 'Houston, TX',
                'start_time' => '2026-06-30 14:00:00',
                'end_time' => '2026-06-30 20:00:00',
                'capacity' => 400,
            ],
            [
                'title' => 'Cybersecurity Conference',
                'description' => 'Learn about the latest trends in online security.',
                'location' => 'Washington, D.C.',
                'start_time' => '2026-07-15 08:30:00',
                'end_time' => '2026-07-15 17:30:00',
                'capacity' => 600,
            ],
            [
                'title' => 'Sustainability & Climate Action Forum',
                'description' => 'Discussions on how to create a more sustainable future.',
                'location' => 'San Diego, CA',
                'start_time' => '2026-08-20 10:00:00',
                'end_time' => '2026-08-20 16:30:00',
                'capacity' => 800,
            ],
        ]);
    }
}
