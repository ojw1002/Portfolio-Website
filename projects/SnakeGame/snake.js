//constructor
function Snake() {
    this.x = 0;
    this.y = 0;
    this.xSpeed = SCALE * 1;
    this.ySpeed = 0;
    this.tot = 0;
    this.tail = [];

    this.draw = function() {
        ctx.fillStyle="yellow";
        
        //colors each square in each time food is eaten. Adds to the tail of the snake
        for(var i = 0; i < this.tail.length; i++) {
            ctx.fillRect(this.tail[i].x,this.tail[i].y,SCALE,SCALE);
        }
        ctx.fillRect(this.x,this.y,SCALE,SCALE);
    }

    this.update = function() {

        //shifts to the left
        for(var i = 0; i < this.tail.length - 1; i++) {
            this.tail[i] = this.tail[i+1];
        }

        this.tail[this.tot -1] = {
            x:this.x,
            y:this.y
        };

        this.x += this.xSpeed;
        this.y += this.ySpeed;

        if(this.x > canvas.width) {
            this.x = 0;
        }
        if(this.y > canvas.height) {
            this.y = 0;
        }
        if(this.x < 0) {
            this.x = canvas.width;
        }
        if(this.y < 0) {
            this.y = canvas.height;
        }
    }

    this.changeDirection = function(DIRECTION) {
        switch(DIRECTION) {
            //moves snake up
            case 'Up':
                this.xSpeed = 0;
                this.ySpeed = -SCALE*1;
                break;
            //moves snake down
            case 'Down':
                this.xSpeed = 0;
                this.ySpeed = SCALE*1;
                break;
            //moves snake right
            case 'Right':
                this.xSpeed= SCALE*1;
                this.ySpeed = 0;
                break;
            //moves snake left
            case 'Left':
                this.xSpeed= -SCALE*1;
                this.ySpeed = 0;
                break;

            default:
                break;
        }
    }

    this.eat = function(food) {
        if(this.x === food.x && this.y === food.y) {
            this.tot++;
            return true;
        }
        return false;
    }
}