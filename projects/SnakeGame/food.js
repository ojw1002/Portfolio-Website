//food constructor
function Food() {
    this.x;
    this.y;

    //creates random location for the food of the snake
    this.location = function() {
        this.x = (Math.floor(Math.random() * ROWS-1) + 1) * SCALE;
        this.y = (Math.floor(Math.random() * COLS-1) + 1) * SCALE;
    }

    this.draw = function() {
        ctx.fillStyle="red";
        ctx.fillRect(this.x, this.y, SCALE, SCALE);
    }
}