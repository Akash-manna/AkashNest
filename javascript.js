/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
canvas = O('logo');
context = canvas.getContext('2d');
//context.font = 'bold italic 90px Georgia';
context.font = '92px K2D';
context.textBaseline = 'top';
image = new Image();
//image.src = 'robin.gif';
image.src = 'bird-nest.png';
image.onload = function() {
//    gradient = context.createLinearGradient(0, 0, 0, 89);
    gradient = context.createLinearGradient(0, 0, 0, 30);
    gradient.addColorStop(0.00, '#FAAAAA');
    gradient.addColorStop(0.66, '#f00000');
    context.fillStyle = gradient;
    context.fillText( " The Pack", 0, 0);
    //context.strokeText(" Akash's Nest", 0, 0);
    context.drawImage(image, 64, 32);
};
function O(obj) {
    if (typeof obj === 'object') return obj;
    else return document.getElementById(obj);
}
function S(obj) {
    return O(obj).style;
}
function C(name) {
    var elements = document.getElementsByTagName('*');
    var objects = [];
    for (var i = 0 ; i < elements.length ; ++i)
        if (elements[i].className === name)
            objects.push(elements[i]);
    return objects;
}
