      const prizes = {
    0: 'img/reward/weapon/00.png',
    1: 'img/reward/weapon/1.png',
    2: 'img/reward/weapon/2.png',
    3: 'img/reward/weapon/3.png',
    4: 'img/reward/weapon/4.png',
    5: 'img/reward/weapon/5.png',
	6: 'img/reward/weapon/6.png',
    7: 'img/reward/weapon/7.png',
    8: 'img/reward/weapon/8.png',
    9: 'img/reward/weapon/9.png',
    10: 'img/reward/weapon/10.png',
    11: 'img/reward/weapon/11.png',
	12: 'img/reward/weapon/12.png',
	13: 'img/reward/weapon/13.png',
	14: 'img/reward/weapon/14.png',
};

const total_items = 15;
const minimum_jumps = 30; 
let arpantek = -1;
let jumps = 0;
let speed = 30;
let timer = 0;
let prize = -1;

function runCircle() {
    $(`[data-order="${arpantek}"]`).removeClass('gift-active');

    arpantek += 1;

    if (arpantek > total_items - 1) {
        arpantek = 0;
    }

    $(`[data-order="${arpantek}"]`).addClass('gift-active');
}

function generatePrizeNumber() {
    return Math.floor(Math.random() * total_items);
}

function controllSpeed() {
    jumps += 1;
    runCircle();
    if (jumps > minimum_jumps + 10 && prize === arpantek) {
        clearTimeout(timer);
        
        $('#get_gift').fadeIn('slow');
        $('.gift_img').attr('src',prizes[arpantek]);

        prize = -1;
        jumps = 0;

    } else {
        if (jumps < minimum_jumps) {
            speed -= 5; 
        } else if (jumps === minimum_jumps) {
            const random_number = generatePrizeNumber();
            prize = random_number;
        } else {
           
            if ( (jumps > minimum_jumps + 10) && prize === (arpantek + 1) ) {
                speed += 600;
            } else {
                speed += 20; 
            }
        }
        if (speed < 40) {
            speed = 40;
        }

        timer = setTimeout(controllSpeed, speed);
    }
}

function init() {
    jumps = 0;
    speed = 100;
    prize = -1;
    controllSpeed();
}

$(document).ready(() => {
    $('#js-start').on('click', init);
});