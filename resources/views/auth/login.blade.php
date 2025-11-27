<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    <!-- Custom CSS Styles -->
    <style>
        /* CSS Variables for easy theming */
        :root {
            --color-background:rgb(116, 145, 209); /* bg-slate-900 */
            --color-card:rgb(47, 116, 214);       /* bg-slate-800 */
            --color-input: #374151;      /* bg-slate-700 */
            --color-border: #4b5563;     /* border-slate-600 */
            
            --color-text-primary: #f9fafb;  /* text-gray-100 */
            --color-text-secondary: #9ca3af;/* text-slate-400 */

            --color-accent: #f59e0b;      /* amber-500 */
            --color-accent-hover: #d97706;/* amber-600 */
            --color-accent-focus-ring: rgba(245, 158, 11, 0.4);

            --font-sans: 'Figtree', sans-serif;
        }

        /* Basic Reset and Body Styles */
        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
        }

        body {
            font-family: var(--font-sans);
            background-color:RGB(167, 172, 196);
            color: var(--color-text-primary);
            -webkit-font-smoothing: antialiased;
            -moz-osx-font-smoothing: grayscale;
        }

        /* Page Container */
        .page-container {
            min-height: 100vh;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            padding: 1.5rem 1rem;
        }

        /* Login Card */
        .login-card {
            width: 100%;
            max-width: 448px; /* max-w-md */
            background-color: rgb(137, 142, 166);
            border-radius: 1rem; /* rounded-2xl */
            box-shadow: 0 20px 25px -5px rgb(0 0 0 / 0.2), 0 8px 10px -6px rgb(0 0 0 / 0.2);
            overflow: hidden;
        }

        .card-content {
            padding: 2.5rem; /* p-10 */
        }
        
        /* Header Section */
        .card-header {
            text-align: center;
            margin-bottom: 2rem;
        }
        .card-title {
            font-size: 1.875rem; /* text-3xl */
            font-weight: 700;
            color: var(--color-accent);
        }
        .card-subtitle {
            margin-top: 0.5rem;
            color: #0a0d11;
        }

        /* Form Styling */
        .login-form {
            display: flex;
            flex-direction: column;
            gap: 1.5rem; /* space-y-6 */
        }

        .form-group {
            display: flex;
            flex-direction: column;
            gap: 0.5rem; /* space-y-2 */
        }

        .input-label {
            font-weight: 600; /* font-semibold */
            color: var(--color-text-primary);
        }
        
        .input-wrapper {
            position: relative;
        }

        .input-icon {
            position: absolute;
            left: 0.75rem; /* pl-3 */
            top: 50%;
            transform: translateY(-50%);
            pointer-events: none;
            display: flex;
            align-items: center;
        }
        .input-icon svg {
            height: 1.25rem; /* h-5 */
            width: 1.25rem;  /* w-5 */
            color: #6b7280; /* text-gray-500 */
        }

        .text-input {
            width: 100%;
            display: block;
            padding: 0.65rem 0.75rem 0.65rem 2.5rem; /* pl-10 */
            background-color: var(--color-input);
            border: 1px solid var(--color-border);
            border-radius: 0.375rem; /* rounded-md */
            color: var(--color-text-primary);
            transition: border-color 0.2s, box-shadow 0.2s;
        }
        .text-input:focus {
            outline: none;
            border-color: var(--color-accent);
            box-shadow: 0 0 0 3px var(--color-accent-focus-ring);
        }

        /* Error Messages */
        .input-error-message {
            color: #ef4444; /* text-red-600 */
            font-size: 0.875rem; /* text-sm */
            list-style-position: inside;
            padding-left: 0.25rem;
        }

        /* Form Options (Remember Me & Forgot Password) */
        .form-options {
            display: flex;
            align-items: center;
            justify-content: space-between;
        }

        .remember-me {
            display: flex;
            align-items: center;
        }
        .remember-me input[type="checkbox"] {
            height: 1rem;
            width: 1rem;
            border-radius: 0.25rem;
            border: 1px solid var(--color-border);
            background-color: var(--color-input);
            accent-color: var(--color-accent); /* Modern way to color checkboxes */
        }
        .remember-me span {
            margin-left: 0.5rem;
            font-size: 0.875rem;
            color: #07090d;
        }
        
        a.link {
            font-size: 0.875rem;
            color: var(--color-accent);
            text-decoration: none;
            font-weight: 500;
            transition: color 0.15s ease-in-out;
        }
        a.link:hover {
            color: var(--color-accent-hover);
            text-decoration: underline;
        }

        /* Submit Button */
        .submit-button {
            width: 100%;
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 0.5rem;
            padding: 0.75rem 1rem;
            border: 1px solid transparent;
            border-radius: 0.5rem;
            font-weight: 500;
            font-size: 0.875rem;
            color: var(--color-text-primary);
            background-color: var(--color-accent);
            cursor: pointer;
            transition: background-color 0.15s ease-in-out;
        }
        .submit-button:hover {
            background-color: var(--color-accent-hover);
        }
        .submit-button:focus {
            outline: none;
            box-shadow: 0 0 0 3px var(--color-accent-focus-ring);
        }
        .submit-button svg {
            width: 1.25rem;
            height: 1.25rem;
        }

        /* Footer */
        .card-footer {
            border-top: 1px solid var(--color-border);
            padding: 1rem 1.5rem;
            text-align: center;
            background-color: rgba(0,0,0,0.1);
        }
        .card-footer p {
            font-size: 0.875rem;
            font-size: 0.875rem;
color: #050b16;
        }
    </style>
</head>
<body>


    <div class="page-container">
        <div class="login-card">
            <div class="card-content">
                <!-- Header Section -->
                <div class="card-header">
                    <h1 class="card-title">Welcome Back</h1>
                    <p class="card-subtitle">Sign in to continue your journey.</p>
                </div>

                <!-- Session Status -->
                <x-auth-session-status :status="session('status')" />

                <form method="POST" action="{{ route('login') }}" class="login-form">
                    @csrf

                    <!-- Email Field -->
                    <div class="form-group">
                        <x-input-label for="email" :value="__('Email')" class="input-label" />
                        <div class="input-wrapper">
                            <div class="input-icon">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                    <path d="M3 4a2 2 0 00-2 2v1.161l8.441 4.221a1.25 1.25 0 001.118 0L19 7.162V6a2 2 0 00-2-2H3z" />
                                    <path d="M19 8.839l-7.77 3.885a2.75 2.75 0 01-2.46 0L1 8.839V14a2 2 0 002 2h14a2 2 0 002-2V8.839z" />
                                </svg>
                            </div>
                            <x-text-input id="email" class="text-input" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
                        </div>
                        <x-input-error :messages="$errors->get('email')" class="input-error-message" />
                    </div>

                    <!-- Password Field -->
                    <div class="form-group">
                        <x-input-label for="password" :value="__('Password')" class="input-label" />
                        <div class="input-wrapper">
                            <div class="input-icon">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                    <path fill-rule="evenodd" d="M10 1a4.5 4.5 0 00-4.5 4.5V9H5a2 2 0 00-2 2v6a2 2 0 002 2h10a2 2 0 002-2v-6a2 2 0 00-2-2h-.5V5.5A4.5 4.5 0 0010 1zm3 8V5.5a3 3 0 10-6 0V9h6z" clip-rule="evenodd" />
                                </svg>
                            </div>
                            <x-text-input id="password" class="text-input" type="password" name="password" required autocomplete="current-password" />
                        </div>
                        <x-input-error :messages="$errors->get('password')" class="input-error-message" />
                    </div>

                    <!-- Remember Me & Forgot Password -->
                    <div class="form-options">
                        <label for="remember_me" class="remember-me">
                            <input id="remember_me" type="checkbox" name="remember">
                            <span>{{ __('Remember me') }}</span>
                        </label>

                        @if (Route::has('password.request'))
                            <a class="link" href="{{ route('password.request') }}">
                                {{ __('Forgot password?') }}
                            </a>
                        @endif
                    </div>

                    <!-- Submit Button -->
                    <div>
                        <x-primary-button class="submit-button">
                            {{ __('Sign In') }}
                            <svg fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path>
                            </svg>
                        </x-primary-button>
                    </div>
                </form>
            </div>
            
            <!-- Footer -->
            <div class="card-footer">
                <p>
                    Don't have an account?
                    <a href="{{ route('register') }}" class="link">
                        Sign up
                    </a>
                </p>
            </div>
        </div>
    </div>


</body>
</html>