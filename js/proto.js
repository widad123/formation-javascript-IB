Number.prototype.even= function(){
    return this.valueOf() %2 == 0;
};

String.prototype.toCapitalize = function(){
    return this.replace(this.charAt(0),this.charAt(0).toUpperCase());
};

function dathour(){
const currentDate = new Date();
const options = { weekday: 'long', year: 'numeric', month: 'short', day: 'numeric' };
let hour = currentDate.toLocaleTimeString('fr-fr');
console.log(currentDate.toLocaleDateString('fr-fr', options),hour);
}

