// Random Background Hero on Page Load and Refresh
// from: http://codepen.io/grayghostvisuals/pen/KokDB?editors=0010

function randomHero() {

    var heroPics = ['https://s3-us-west-2.amazonaws.com/s.cdpn.io/392/musician-background-1680.jpg','https://s3-us-west-2.amazonaws.com/s.cdpn.io/392/pink-floyd-division-bell-228953.jpg', 'https://s3-us-west-2.amazonaws.com/s.cdpn.io/392/northstar.jpg', 'https://s3-us-west-2.amazonaws.com/s.cdpn.io/392/womensrights.jpg'
    ];

    jQuery('.section__hero-banner').css({
        'background-image' : 'url('+ heroPics[Math.floor(Math.random() * heroPics.length)] + ') no-repeat',
    });
}

// Show Random Image on Page Load
randomHero();