<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
  <head>
    <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Laravel</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <script type="text/javascript" src="{{ asset('js/app.js') }}"></script>
  </head>
  <body>
      <div id="login" class="nes-field">

      </div>
  </body>
  <script type="text/javascript">
    /*Echo.channel('user')
      .listen('UserLogin', (e) => {
      console.log(e);
    });*/
    class LoginForm extends React.Component{
      constructor(props){
        super(props);
        this.state = {value:''};

        this.handleSubmit = this.handleSubmit.bind(this);
      }
      handleSubmit(){
      }
      render(){
        return React.createElement('form', {
          onSubmit: this.handleSubmit,
          action: "GET"
        },
          React.createElement('input',{
            type: "text",
            className: "nes-input",
            placeholder:"Your name"
          }),
          React.createElement('input',{
            type: "text",
            className: "nes-input",
            placeholder: "Room ID"
          }),
          React.createElement('input',{
            type: "submit",
            className: "nes-btn is-primary",
            value: "Connect"
          }),
        )
        /*return (
          <form onSubmit={this.handleSubmit}>
            <input type="text" class="nes-input" placeholder="Your name"/>
            <input type="text" id="roomID" class="nes-input" placeholder="Room ID"/>
            <input type="submit" class="nes-btn is-primary" value="Connect"/>
          </form>
        );*/
      }
    }
    ReactDOM.render(
      React.createElement(LoginForm),
      document.getElementById('login')
    );
  </script>
  
</html>
