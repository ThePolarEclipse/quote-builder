<?php
class Kernel extends ConsoleKernel
{
    protected function schedule(Schedule $schedule)
    {
        $schedule->call(function () {
            // Logic for daily overview email
        })->daily();
    }
}
