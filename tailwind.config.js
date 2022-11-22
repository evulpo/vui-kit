/** @type {import('tailwindcss').Config} */
const colors = require('tailwindcss/colors')
const defaultTheme = require('tailwindcss/defaultTheme')

module.exports = {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
        './resources/js/components/**/*.js',
        './src/views/**/*.blade.php'
    ],
    safelist: [  ],
    darkMode: 'class', // or 'class' or 'media'
    // important: true,
    theme: {
        screens: {
            'mobile': {'max': '700px'},
            'xs': '475px',
            ...defaultTheme.screens,
            'desktop' : {'min': '1920px'},
        },
        colors: {
            transparent: 'transparent',
            current: 'currentColor',
            white: '#ffffff',
            black: '#000000',
            grey: {
                // 50: '#DDE8E6',
                // 100: '#E0F6EE',
                200: '#E5E5E5',
                300: '#b5b5b5',
                400: '#737373',
                500: '#505050',
                600: '#4b4b4b',
                // 700: '#4b5563',
                800: '#373737',
                900: '#1f1f1f',
            },
            iris: {
                50: '#E9EDF9',
                100: '#DFE0F3',
                200: '#BFC1E7',
                300: '#9EA2DC',
                400: '#7E83D0',
                500: '#5E64C4',
                600: '#4B509D',
                700: '#383C76',
                800: '#26284E',
                900: '#131427',
            },
            azul: {
                //50: '#DDE8E6',
                100: '#DEF2FE',
                200: '#BEE4FD',
                300: '#9DD7FB',
                400: '#7DC9FA',
                500: '#5CBCF9',
                600: '#4A96C7',
                700: '#377195',
                800: '#254B64',
                900: '#122632',
            },
            jade: {
                //50: '#DDE8E6',
                100: '#E0F6EE',
                200: '#C0EEDC',
                300: '#A1E5CB',
                400: '#81DDB9',
                500: '#62D4A8',
                600: '#4EAA86',
                700: '#3B7F65',
                800: '#275543',
                900: '#142A22',
            },
            rosa: {
                //50: '#DDE8E6',
                100: '#FFE7F0',
                200: '#FFCFE0',
                300: '#FFB8D1',
                400: '#FFA0C1',
                500: '#FF88B2',
                600: '#CC6D8E',
                700: '#99526B',
                800: '#663647',
                900: '#331B24',
            },
            red: {
                DEFAULT: '#ef5c6c',
                500: '#ef5c6c'
            },
            orange: {
                DEFAULT: '#e28848',
                500: '#e28848'
            },
            yellow: {
                DEFAULT: '#ffe167',
                100: '#fffdd7',
                500: '#ffe167'
            },
            brown: {
                DEFAULT: '#ef5c6c',
                200: '#e0cba4',
                500: '#e0cba4',
            },
            plume: {
                DEFAULT: '#ef5c6c',
                500: '#542b42'
            },
            karmin: {
                DEFAULT: '#912F40',
                100: '#F5E1E5',
                500: '#912F40',
            },
            lavande: {
                DEFAULT: '#44448F',
                100: '#B3B5F6',
                500: '#44448F',
            },
            cabbage: {
                DEFAULT: '#134458',
                100: '#d5ecf6',
                500: '#134458',
            },
            marine: {
                DEFAULT: '#146EC0',
                100: '#DEEDFB',
                500: '#146EC0',
            },
            lagune: {
                DEFAULT: '#009f85',
                500: '#009f85',
            },
            pink: {
                DEFAULT: '#ce6e8d',
                500: '#ce6e8d',
            },
            // orange: {
            //     DEFAULT: '#e28848',
            //     500: '#e28848',
            // },
            velour: {
                //50: '#DDE8E6',
                100: '#FCDEE2',
                200: '#F9BEC4',
                300: '#F59DA7',
                400: '#F27D89',
                500: '#EF5C6C',
                600: '#BF4A56',
                700: '#8F3741',
                800: '#60252B',
                900: '#301216',
            },
            german: {
                DEFAULT: '#912F40',
                '25': '#faf0f2',
                '50': '#F5E1E5',
                500: '#912F40',
                '300': '#D88895',
                '600': '#4F0A11'
            },
            french: {
                DEFAULT: '#44448F',
                '25': '#d9dafa',
                '50': '#B3B5F6',
                500: '#44448F',
                '300': '#8586C7',
                '600': '#21156C'
            },
            english: {
                DEFAULT: '#134458',
                '25': '#eaf5fa',
                '50': '#d5ecf6',
                500: '#134458',
                '300': '#2786ad',
                '600': '#082b38'
            },
            maths: {
                DEFAULT: '#146EC0',
                '25': '#edf6fc',
                '50': '#DEEDFB',
                500: '#146EC0',
                '300': '#79B7F1',
                '600': '#00305B'
            },
            science: {
                DEFAULT: '#009f85',
                // '25': '#edf6fc',
                // '50': '#DEEDFB',
                500: '#009f85',
                // '300': '#79B7F1',
                // '600': '#00305B'
            },
            coops: {
                DEFAULT: '#ce6e8d',
                // '25': '#edf6fc',
                // '50': '#DEEDFB',
                500: '#ce6e8d',
                // '300': '#79B7F1',
                // '600': '#00305B'
            },
            history: {
                DEFAULT: '#e28848',
                // '25': '#edf6fc',
                // '50': '#DEEDFB',
                500: '#e28848',
                // '300': '#79B7F1',
                // '600': '#00305B'
            },
            // red: {
            //     DEFAULT: '#FA5954',
            //     '25': '#fdf6f5',
            //     '50': '#fae3df',
            //     '300': '#ff9c8b',
            //     '500': '#FA5954',
            // },
            // 'green': {
            //     DEFAULT: '#5E64C4',
            //     25: '#eef4f2',
            //     50: '#DDE8E6',
            //     300: '#B2DAD5',
            //     500: '#557473',
            // },
            // main: '#333',
            primary:{
                'lang': '#912F40',
                'purple':'#5E64C4',
                'purple-light':'#DFE0F3',
                'purple-lighter':'#F1F5FF',
                'red':'#ef5c6c',
                'red-light':'#ffe4f8',
                'green':'#6dd4a8',
                'green-light':'#daffe3',
                'grey':"#555555",
                'light-blue':"#DBE7FF",
            },
            secondary: {
                'pink': '#FFB8D1',
                'yellow': '#ffe167',
                'yellow-light': '#fffdd7',
                'green-dark': '#2fb590',
                'grey': '#505050',
                'light-grey': '#cecece',
                'grey-light':'#b5b5b5',
                'grey-white':'#F4F5FB',
                'blue':'#9DD7FB',
                'light-blue':'#DEF2FE',
                'light-pink':'#FFE7F0',
                'plume':'#542b42',
                'brown-light':'#e0cba4',
                'white': '#ffffff',
                'glow': '#e5ffe5',
                'blue-report' : '#5F66A5',
                'blue-report-light' : '#5F99A5',
                'violet-dark' : '#1B003E',
                'polar-blue-bright' : '#00F0FF',
                'peach' : '#FF969B',
                'violet-black': '#1B003E',
                'lesson-light':'#ECEDFF',
                'lesson-pink':'#FBF8FF',
            },
            exercises: {
                'correct': '#3B7F65',
                'correct-medium': '#62D4A8',
                'correct-light': '#E0F6EE',
                'correct-answer': '#275543',
                'correct-answer-light' : '#C0EEDC',
                'wrong': '#BF4A56',
                'wrong-medium': '#EF5C6C',
                'wrong-light': '#FFCFE0',
                'wrong-answer': '#99526B',
                'wrong-answer-light' : '#FFCFE0',
                'grey': '#636363',
                'grey-medium':'#AAAAAA',
                'grey-light': '#F0F0F0',
                'purple' : '#4B509D',
                'button' : '#F9F5FF',
            },
            font: {
                DEFAULT: '#505050',
            }
        },
        rotate: {
            '-180': '-180deg',
            '-90': '-90deg',
            '-45': '-45deg',
            '0': '0',
            '45': '45deg',
            '90': '90deg',
            '135': '135deg',
            '180': '180deg',
            '225': '225deg',
            '270': '270deg',
        },
        borderWidth: {
            DEFAULT: '1px',
            '0': '0',
            '1': '1px',
            '2': '2px',
            '3': '3px',
            '4': '4px',
            '6': '6px',
            '8': '8px',
        },
        extend: {
            fontSize: {
            'xl':'1.15rem',
            },
            fontFamily: {
                sans: ['Beatrice'],
                body: ['Beatrice']
            },
            fontWeight: {
                DEFAULT: 300,
                normal: 300,
                medium: 500,
                bold: 700,
            },
            typography: (theme) => ({
                DEFAULT: {
                    css: {
                        color: theme('colors.font'),
                        h2: {
                            color: theme('colors.font'),
                            fontWeight: 'font-normal',
                        },
                        h3: {
                            color: theme('colors.green.500'),
                            fontWeight: 'font-medium',
                        },
                        strong: {
                            color: theme('colors.font'),
                        },
                        a: {
                            color: theme('colors.green.500'),
                            textDecoration: 'none',
                            '&:hover': {
                                color: theme('colors.font'),
                                textDecoration: 'none',
                            },
                            '&:focus': {
                                color: theme('colors.font'),
                                textDecoration: 'none',
                            }
                        },
                    },
                },
            }),
            width: {
                '1/12':'8.333%',
                '1/15':'6.666%',
                '1/20': '5%',

                '1/7': '14.2857143%',
                '2/7': '28.5714286%',
                '3/7': '42.8571429%',
                '4/7': '57.1428571%',
                '5/7': '71.4285714%',
                '6/7': '85.7142857%',

                '1/8': '12.5%',
                '2/8': '25%',
                '3/8': '37.5%',
                '4/8': '50%',
                '5/8': '62.5%',
                '6/8': '75%',
                '7/8': '87.5%',

                '1/9': '11.111%',
                '2/9': '22.222%',
                '3/9': '33.333%',
                '4/9': '44.444%',
                '5/9': '55.555%',
                '6/9': '66.666%',
                '7/9': '77.777%',
                '8/9': '88.888%',

                '1/10': '10%',
                '2/10': '20%',
                '3/10': '30%',
                '4/10': '40%',
                '5/10': '50%',
                '6/10': '60%',
                '7/10': '70%',
                '8/10': '80%',
                '9/10': '90%',

                '1/11': '9.09090%',
                '2/11': '18.1818%',
                '3/11': '27.2727%',
                '4/11': '36.3636%',
                '5/11': '45.4545%',
                '6/11': '54.5454%',
                '7/11': '63.6363%',
                '8/11': '72.7272%',
                '9/11': '81.8181%',
                '10/11': '90.9090%',
                // continue from 13 to 20 ... is there a way to automate this?
            },
            height:{
                "screen/2": "50vh",
                "screen/3": "calc(100vh / 3)",
                "screen/4": "calc(100vh / 4)",
                "screen/5": "calc(100vh / 5)",

                '1/8': '12.5%',
                '2/8': '25%',
                '3/8': '37.5%',
                '4/8': '50%',
                '5/8': '62.5%',
                '6/8': '75%',
                '4/5': '80.0%',
                '7/8': '87.5%',
            },
            minHeight:{
                "screen/60": "60vh",
                "screen/70": "70vh",
                "screen/80": "80vh",
                "screen/2": "50vh",
                "screen/3": "calc(100vh / 3)",
                "screen/4": "calc(100vh / 4)",
                "screen/5": "calc(100vh / 5)",
            },
            margin:{
                '1/12': '8.333%',
                '2/12': '16.666%',
            },
            minWidth:{
            '0': '0',
            '1/20': '5%',
            '1/10': '10%',
            '1/8': '12.5%',
            '1/6': '16.666%',
            '1/4': '25%',
            '1/2': '50%',
            '3/5': '60%',
            '3/4': '75%',
            'full': '100%',
            },
            maxWidth:{
                '0': '0',
                '1/10': '10%',
                '1/8': '12.5%',
                '1/6': '16.666%',
                '1/4': '25%',
                '1/2': '50%',
                '3/5': '60%',
                '3/4': '75%',
                '4/5': '80%',
                'full': '100%',
            },
            maxHeight:{
                '0': '0',
                '1/4': '25%',
                '1/2': '50%',
                '3/4': '75%',
                'full': '100%',
            },
        },
    },

    plugins: [require('@tailwindcss/forms'), require('@tailwindcss/typography'), require('@tailwindcss/aspect-ratio')],
};
