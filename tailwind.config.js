module.exports = {
    prefix: '',
    theme: {
        extend: {
            colors: {
                teal: '#008483',
                'teal-light': '#a6d0cf',
            }
        },
        fontFamily: {
            sans: [
                'Inter',
                '-apple-system',
                'BlinkMacSystemFont',
                '"Segoe UI"',
                'Roboto',
                '"Helvetica Neue"',
                'Arial',
                '"Noto Sans"',
                'sans-serif',
                '"Apple Color Emoji"',
                '"Segoe UI Emoji"',
                '"Segoe UI Symbol"',
                '"Noto Color Emoji"',
            ],
            serif: ['Georgia', 'Cambria', '"Times New Roman"', 'Times', 'serif'],
            mono: ['Menlo', 'Monaco', 'Consolas', '"Liberation Mono"', '"Courier New"', 'monospace'],
        },
        letterSpacing: {
            tighter: '-0.022em',
            tight: '-0.019em',
            normal: '-0.11em',
            wide: '0',
            wider: '0.024em',
            widest: '0.043em',
        },
    },
}
