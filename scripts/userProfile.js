class User{
    constructor(id,account_cash,name){
      this.id=id
      this.name=name
      this.account_cash=account_cash
    }
    update_profile(){
      document.getElementById("player").innerHTML=this.name
      document.getElementById("money").innerHTML="Balance: "+this.account_cash
      document.getElementById("id").innerHTML="Id: "+this.id
    }
    slots(){
      const ticket_cost=50
      //money check
      if(this.account_cash-ticket_cost>=0){
        this.account_cash=this.account_cash-ticket_cost
        this.update_profile()
        function slot_generate(){
          const pattern=["club","coin","diamond","dice","gold","money"]
          var slot1=pattern[Math.floor(Math.random() * 6)]+".PNG"
          var slot2=pattern[Math.floor(Math.random() * 6)]+".PNG"
          var slot3=pattern[Math.floor(Math.random() * 6)]+".PNG"
          document.getElementById("slot1").style.backgroundImage="url(game_assets/"+slot1+")"
          document.getElementById("slot2").style.backgroundImage="url(game_assets/"+slot2+")"
          document.getElementById("slot3").style.backgroundImage="url(game_assets/"+slot3+")"
          if(slot1==slot2 && slot2==slot3){
              slot_generate()
            }
          }
        slot_generate()
        setTimeout( function() { alert("You loose") }, 500);      
      }
      else{
        alert("Please add money")
          }
    }
    spinWheel(){
      //game code
        const ticket_cost=100
        if(this.account_cash-ticket_cost>=0){
          this.account_cash=this.account_cash-ticket_cost
          // var wheel=[90,120,150,180,270,300]
          var wheel=[450,480,510,540,630,660]
          this.update_profile()
          // for (let i = 1; i <= 12; i++) {
          //   wheel.push(30*i)
          // }
          console.log(wheel)
          var wheel_angle=wheel[Math.floor(Math.random() * 6)]
          var img = document.getElementById('wheel');
          img.animate([
            // keyframes
            { transform: `rotate(${0}deg)` },
            { transform: `rotate(${wheel_angle}deg)` }
          ], { 
            // timing options
            duration: 2000,
          });
          // img.style.transform = `rotate(${wheel_angle}deg)`;
          img.style.transform = `rotate(${wheel_angle}deg)`;
          setTimeout( function() { alert("You loose") }, 3000);      
        }
        else{
          alert("Please add money")
          }
    }
    guessNumber(){
      //value check
      const ticket_cost=75
      if(document.getElementById("guess").value===""){
        alert("Make a move")
        return
      }
      //money check
      if(this.account_cash-ticket_cost>=0){
        this.account_cash=this.account_cash-ticket_cost
        this.update_profile()
      //for generating computer values
        function number_generator(user_input){
            var computer_generated=Math.floor(Math.random() * 10) + 1;
            if (computer_generated!=user_input){
                return computer_generated
            }
            else{
                number_generator(user_input)
            }
        }
        //gameplay
        var user_input=document.getElementById("guess").value
        console.log("user input is",user_input)
        var computer_generated=number_generator(user_input)
        document.getElementById("actual_number").innerHTML=computer_generated
        setTimeout( function() { alert("You loose") }, 500);      
      }
    else{
      alert("Please add money")
        }
  } 
}
//can be fetched from Database
// var player_name="James"
// let user = new User(123,5000,player_name);
// user.update_profile()

function user_creation(name){
  var player_name=name
  let user=new User(123,5000,player_name)
  user.update_profile()
  return user
}


