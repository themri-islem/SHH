<style>
    * {
    box-sizing: border-box;
    text-decoration: none;
    
  }
  
 
  
  
  
  nav {
    background-color:transparent;
    padding: 0 20px;
    border-radius: 40px;
    box-shadow: 0 10px 40px rgba(15, 41, 169, 0.8);
    display: flex;
    overflow: hidden;
    overflow-x: auto;
    position: relative;
    margin-right: 200px;
        
  }
  
  .nav-item {
    color: #f2f1f7;
    font-family: georgia;
    padding: 20px;
    margin: 0 5px;
    position: relative;
    font-weight: bolder;
    font-size: 16px;

  }
  
  .nav-item:before {
    content: "";
    position: absolute;
    bottom: -6px;
    background-color: rgb(239, 234, 230), 223, 223);
    height: 5px;
    width: 100%;
    border-radius: 8px 8px 0 0;
    left: 0;
    transition: .3s;
  }
  
  .nav-item:not(.is-active):hover:before {
    bottom: 0;
  }
  .nav-item:not(.is-active):hover {
    color:orange;
  }
  
  .nav-indicator {
    position: absolute;
    left: 0;
    bottom: 0;
    height: 5px;
    transition: .4s;
    border-radius: 8px 8px 0 0;
  }
</style>

    <nav > 
        <a href="#" class="nav-item is-active" data-active-color="orange" data-target="Home">Home</a>
        <a href="#" class="nav-item" data-active-color="green" data-target="About">About Us
        </a>
        <a href="#" class="nav-item" data-active-color="blue" data-target="Testimonials">Equipment
        </a>
        <a href="#" class="nav-item" data-active-color="red" data-target="Blog">Blog</a>
        <a href="#" class="nav-item" data-active-color="rebeccapurple" data-target="Contact">Contact</a>
        <span class="nav-indicator">
        </span>
       
        </nav>
<script src="assets/js/is.js"></script>


  