@extends('front.layouts.master')

@section('main_content')
<style>
.countdown-container {
    background: #e6e6e6;
    border-radius: 15px;
    padding: 40px 20px;
    margin: 0 auto;
    max-width: 600px;
    margin-top: 50px;
}

.countdown-title {
    color: #333;
    font-size: 24px;
    font-weight: 600;
    margin-bottom: 30px;
}

.countdown-timer {
    display: flex;
    justify-content: center;
    gap: 20px;
    flex-wrap: wrap;
}

.time-box {
    background: white;
    border-radius: 10px;
    padding: 20px 15px;
    min-width: 80px;
    box-shadow: 0 5px 15px rgba(0,0,0,0.1);
    transition: transform 0.3s ease;
}

.time-box:hover {
    transform: translateY(-5px);
}

.time-number {
    display: block;
    font-size: 2.5rem;
    font-weight: bold;
    color: var(--tg-theme-primary);
    line-height: 1;
    margin-bottom: 5px;
}

.time-label {
    display: block;
    font-size: 0.9rem;
    color: #666;
    text-transform: uppercase;
    font-weight: 500;
    letter-spacing: 1px;
}

@media (max-width: 768px) {
    .countdown-timer {
        gap: 15px;
    }
    
    .time-box {
        min-width: 70px;
        padding: 15px 10px;
    }
    
    .time-number {
        font-size: 2rem;
    }
    
    .time-label {
        font-size: 0.8rem;
    }
}

.animate-pulse {
    animation: pulse 2s infinite;
}

@keyframes pulse {
    0% { opacity: 1; }
    50% { opacity: 0.7; }
    100% { opacity: 1; }
}
</style>

<section class="error-area">
    <div class="container">
        <div class="row justify-content-center full-vh">
            <div class="col-lg-12 d-flex align-items-center justify-content-center">
                <div class="error-wrap text-center w-100">
                    <div class="section__title">
                        @if($global_setting->maintenance_mode_logo_status == 'Show')
                        <div>
                            <img src="{{ asset('uploads/'.$global_setting->logo) }}" alt="" class="w_300 mb-50">
                        </div>
                        @endif
                        <h2 class="title">{{ $global_setting->maintenance_mode_heading }}</h2>
                        <p class="sec-text mt-20">
                            {!! $global_setting->maintenance_mode_text !!}
                        </p>
                        @if($global_setting->maintenance_mode_countdown_status == 'Show')
                        <div class="counter">
                            <div class="countdown-container mt-50">
                                @if($global_setting->maintenance_mode_countdown_heading != '')
                                <h3 class="countdown-title mb-30">
                                    {{ $global_setting->maintenance_mode_countdown_heading }}
                                </h3>
                                @endif
                                <div class="countdown-timer">
                                    <div class="time-box">
                                        <span class="time-number" id="days">{{ __('00') }}</span>
                                        <span class="time-label">{{ __('Days') }}</span>
                                    </div>
                                    <div class="time-box">
                                        <span class="time-number" id="hours">{{ __('00') }}</span>
                                        <span class="time-label">{{ __('Hours') }}</span>
                                    </div>
                                    <div class="time-box">
                                        <span class="time-number" id="minutes">{{ __('00') }}</span>
                                        <span class="time-label">{{ __('Minutes') }}</span>
                                    </div>
                                    <div class="time-box">
                                        <span class="time-number" id="seconds">{{ __('00') }}</span>
                                        <span class="time-label">{{ __('Seconds') }}</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<script>
const targetDate = new Date('{{ $global_setting->maintenance_mode_countdown_date }} {{ $global_setting->maintenance_mode_countdown_time }}').getTime();

function updateCountdown() {
    const now = new Date().getTime();
    const timeLeft = targetDate - now;
    
    if (timeLeft > 0) {
        // Calculate time units
        const days = Math.floor(timeLeft / (1000 * 60 * 60 * 24));
        const hours = Math.floor((timeLeft % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
        const minutes = Math.floor((timeLeft % (1000 * 60 * 60)) / (1000 * 60));
        const seconds = Math.floor((timeLeft % (1000 * 60)) / 1000);
        
        // Update the display
        document.getElementById('days').textContent = String(days).padStart(2, '0');
        document.getElementById('hours').textContent = String(hours).padStart(2, '0');
        document.getElementById('minutes').textContent = String(minutes).padStart(2, '0');
        document.getElementById('seconds').textContent = String(seconds).padStart(2, '0');
        
        // Add pulse animation to seconds
        const secondsElement = document.getElementById('seconds');
        secondsElement.classList.add('animate-pulse');
        setTimeout(() &eqgt; {
            secondsElement.classList.remove('animate-pulse');
        }, 500);
        
    } else {
        // Countdown finished
        document.getElementById('days').textContent = '00';
        document.getElementById('hours').textContent = '00';
        document.getElementById('minutes').textContent = '00';
        document.getElementById('seconds').textContent = '00';
        
        // Optional: Show a message or reload the page
        document.querySelector('.countdown-title').textContent = 'Maintenance Complete!';
        
        // Reload page after 5 seconds to check if site is back online
        setTimeout(() &eqgt; {
            window.location.reload();
        }, 5000);
    }
}

// Update countdown immediately
updateCountdown();

// Update countdown every second
setInterval(updateCountdown, 1000);
</script>

@endsection