const canvas = document.querySelector(".canvas");
const ctx = canvas.getContext("2d");
const SCALE = 15;
const ROWS = canvas.height / SCALE;
const COLS = canvas.width / SCALE;

var snake;
var food;

//calls itself immediately and sets up snake
(function setup() {
    snake = new Snake();
    food = new Food();

    food.location();

    window.setInterval(() => {
        //clears where snake has been
        ctx.clearRect(0,0,canvas.width,canvas.height);
        food.draw();
        snake.update();
        snake.draw();

        if(snake.eat(food)) {
            //gives new location when eaten
            food.location();
        }

    } , 250);
}());

//direction changes on keydown arrows of keyboard
window.addEventListener('keydown', ((evt) =>{
    const DIRECTION = evt.key.replace('Arrow', '');
    snake.changeDirection(DIRECTION);
}))