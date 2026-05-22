/** @type {import('tailwindcss').Config} */
export default {
    content: [
        './resources/**/*.blade.php',
        './resources/**/*.js',
        './resources/**/*.vue',
    ],
    darkMode: 'class',
    theme: {
        extend: {
            colors: {
                primary: {
                    50:  '#eff6ff',
                    100: '#dbeafe',
                    200: '#bfdbfe',
                    300: '#93c5fd',
                    400: '#60a5fa',
                    500: '#3b82f6',
                    600: '#2563eb',
                    700: '#1d4ed8',
                    800: '#1e40af',
                    900: '#1e3a8a',
                    950: '#172554',
                },
                neon: {
                    blue:  '#00d4ff',
                    cyan:  '#00ffff',
                    green: '#00ff88',
                },
                dark: {
                    900: '#020617',
                    800: '#0a0f1e',
                    700: '#0d1424',
                    600: '#111827',
                    500: '#1e293b',
                },
            },
            fontFamily: {
                sans:  ['Inter', 'sans-serif'],
                mono:  ['JetBrains Mono', 'monospace'],
                display: ['Orbitron', 'sans-serif'],
            },
            animation: {
                'float':         'float 6s ease-in-out infinite',
                'pulse-slow':    'pulse 4s cubic-bezier(0.4, 0, 0.6, 1) infinite',
                'spin-slow':     'spin 20s linear infinite',
                'glow':          'glow 2s ease-in-out infinite alternate',
                'slide-up':      'slideUp 0.6s ease-out',
                'fade-in':       'fadeIn 0.8s ease-out',
                'typing':        'typing 3.5s steps(40, end), blink-caret 0.75s step-end infinite',
                'scan':          'scan 3s linear infinite',
                'grid-move':     'gridMove 20s linear infinite',
            },
            keyframes: {
                float: {
                    '0%, 100%': { transform: 'translateY(0px)' },
                    '50%':      { transform: 'translateY(-20px)' },
                },
                glow: {
                    from: { textShadow: '0 0 10px #00d4ff, 0 0 20px #00d4ff, 0 0 30px #00d4ff' },
                    to:   { textShadow: '0 0 20px #00d4ff, 0 0 30px #00d4ff, 0 0 40px #00d4ff' },
                },
                slideUp: {
                    from: { opacity: '0', transform: 'translateY(30px)' },
                    to:   { opacity: '1', transform: 'translateY(0)' },
                },
                fadeIn: {
                    from: { opacity: '0' },
                    to:   { opacity: '1' },
                },
                scan: {
                    '0%':   { transform: 'translateY(-100%)' },
                    '100%': { transform: 'translateY(100vh)' },
                },
                gridMove: {
                    '0%':   { backgroundPosition: '0 0' },
                    '100%': { backgroundPosition: '50px 50px' },
                },
            },
            backgroundImage: {
                'grid-pattern': "linear-gradient(rgba(59,130,246,0.05) 1px, transparent 1px), linear-gradient(90deg, rgba(59,130,246,0.05) 1px, transparent 1px)",
                'hero-gradient': "radial-gradient(ellipse at top, #172554 0%, #020617 50%, #0a0f1e 100%)",
                'card-gradient': "linear-gradient(135deg, rgba(255,255,255,0.05) 0%, rgba(255,255,255,0.02) 100%)",
                'neon-gradient': "linear-gradient(135deg, #00d4ff, #3b82f6, #8b5cf6)",
            },
            backdropBlur: {
                xs: '2px',
            },
            boxShadow: {
                'neon':     '0 0 20px rgba(0, 212, 255, 0.3), 0 0 40px rgba(0, 212, 255, 0.1)',
                'neon-lg':  '0 0 30px rgba(0, 212, 255, 0.5), 0 0 60px rgba(0, 212, 255, 0.2)',
                'glass':    '0 8px 32px rgba(0, 0, 0, 0.3)',
                'card':     '0 4px 20px rgba(0, 0, 0, 0.4)',
            },
        },
    },
    plugins: [
        require('@tailwindcss/forms'),
        require('@tailwindcss/typography'),
    ],
};
