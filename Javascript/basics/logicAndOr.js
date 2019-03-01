let isGuestOneVegan = true;
let isGuestTwoVegan = false;

if (isGuestOneVegan && isGuestTwoVegan) {
    console.log('Only offer up vegan dishes');
} else if (isGuestOneVegan || isGuestTwoVegan) {
    console.log('Make sur to offer up some vegan options');
} else {
    console.log('Offer anything to eat');
}