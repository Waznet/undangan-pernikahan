export const data = {
    bride: {
        L: {
            id: 1,
            name: 'Ridwan',
            child: 'Putra ke Tujuh',
            father: 'Albert',
            mother: 'Elizabeth',
            image: '/main/src/assets/images/ridwan.png'
        },
        P: {
            id: 2,
            name: 'Jofanny',
            child: 'Putri ke Tiga',
            father: 'Jason',
            mother: 'Abigail',
            image: '/main/src/assets/images/jofanny.png'
        },

        couple: '/main/src/assets/images/welcome.jpg'
    },

    time: {
        marriage: {
            year: '2025',
            month: 'April',
            date: '14',
            day: 'Senin',
            hours: {
                start: '08.00',
                finish: 'Selesai'
            }
        },
        reception: {
            year: '2024',
            month: 'April',
            date: '14',
            day: 'Senin',
            hours: {
                start: '11.00',
                finish: 'Selesai'
            }
        },
        address: 'Jl. Tengku Zainal Abidin No.1, Kota Tinggi, Kec. Pekanbaru Kota, Kota Pekanbaru, Riau 28116'
    },

    link: {
        calendar: 'https://calendar.app.google/Xb9UuEZpnMPSSY7g7',
        map: 'https://maps.app.goo.gl/Yrkd1iSdSrT48GFe8',
    },

    galeri: [
        {
            id: 1,
            image: '/main/src/assets/images/galeri1.jpg'
        },
        {
            id: 2,
            image: '/main/src/assets/images/galeri2.jpg'
        },
        {
            id: 3,
            image: '/main/src/assets/images/galeri3.jpg'
        },
        {
            id: 4,
            image: '/main/src/assets/images/galeri4.jpg'
        },
        {
            id: 5,
            image: '/main/src/assets/images/galeri5.jpg'
        }
    ],

    bank: [
        {
            id: 1,
            name: 'Muhammad Ridwan',
            icon: '/main/src/assets/images/bca.png',
            rekening: '2307111536'
        },
        {
            id: 2,
            name: 'Jofanny',
            icon: '/main/src/assets/images/bri.png',
            rekening: '894456289034145'
        },
    ],

    audio: '/main/src/assets/audio/wedding.mp3',

    api: 'https://script.google.com/macros/s/AKfycbz81PFM5pGaCb2aZ5Z1gHfrkFzTegX0jlVH64S6feXp3NQJCWqvOqNVBFJr490BmkySyw/exec',

    navbar: [
        {
            id: 1,
            teks: 'Home',
            icon: 'bx bxs-home-heart',
            path: '#home',
        },
        {
            id: 2,
            teks: 'Mempelai',
            icon: 'bx bxs-group',
            path: '#bride',
        },
        {
            id: 3,
            teks: 'Tanggal',
            icon: 'bx bxs-calendar-check',
            path: '#time',
        },
        {
            id: 4,
            teks: 'Galeri',
            icon: 'bx bxs-photo-album',
            path: '#galeri',
        },
        {
            id: 5,
            teks: 'Ucapan',
            icon: 'bx bxs-message-rounded-dots',
            path: '#wishas',
        },
    ],
}
