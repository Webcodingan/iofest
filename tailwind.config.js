const colors = require('tailwindcss/colors')
/** @type {import('tailwindcss').Config} */
module.exports = {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
    ],
    theme: {
        colors: {
            'b': {
                'base': '#0D255C',
                10: '#CFD3DE',
                20: '#AEB6C9',
                30: '#8692AD',
                40: '#5E6E92',
                50: '#354977',
                60: '#0B1F4D',
                70: '#09193D',
                80: '#07132E',
                90: '#040C1F',
                100: '#030712',
                'vibrant': '#1736D5',
            },
            'db': {
                'base': '#0B0B27',
                10: '#CECED4',
                20: '#AEAEB7',
                30: '#858593',
                40: '#5C5C6F',
                50: '#34344B',
                60: '#090921',
                70: '#07071A',
                80: '#060614',
                90: '#04040D',
                100: '#020208',
            },
            'p': {
                'base': '#B432D4',
                10: '#F0D6F6',
                20: '#E6BBF1',
                30: '#D998E9',
                60: '#962AB1',
                70: '#78218D',
                80: '#5A196A',
                90: '#3C1147',
                100: '#240A2A',
            },
            ...colors
        },
        extend: {
            backgroundColor: ['hover']
        },
    },
    plugins: [],
}

