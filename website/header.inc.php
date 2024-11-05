<style>
   .header-div {
       display: flex;
       align-items:flex-end;
   }
   .header-div img {
       width: 35px;
       height: 35px;
       margin-right: 5px;
   }
   .header-div h1,
   .header-div h2 {
       margin: 0;
   }
   .login-container{
    display: flex;
       justify-content: center;
       align-items: center;
       height: 100vh;
   }
</style>
<div class="header-div">
   <img src="alttechcitylogo.png" alt="Tech City Logo">
   <div>
       <h1>Tech City</h1>
       <h2>Inventory Management</h2>
   </div>
</div>
<style>
 form[name="login"] {
   display: grid;
   grid-template-columns:1fr;
   grid-template-rows: auto;
   gap: 10px;
   align-items:right;
   max-width: 300px;
   margin: 0;
 }
 form[name="login"] label {
   text-align: right;
   padding-right: 5px;
 }
 form[name="login"] input[type="text"],
 form[name="login"] input[type="password"] {
   width: 100%;
   padding: 8px;
 }
 form[name="login"] input[type="submit"] {
   justify-self: start;

 }
</style>