<!DOCTYPE html>
<html>
<head>
    <title>Lab 08task 01</title>
    <style>
        /* Add your CSS styles here */
        .header {
            
            padding: 20px;
            border: 2px solid red;
            margin: 10px;
            
        }
        
        .sidebar-left {
            float: left;
            width: 25%;
            height: 400px;
            padding: 20px;
            border: 2px solid blue;
            margin: 10px;
        }
        
        .sidebar-right {
            float: right;
            width: 25%;
            height: 400px;
            padding: 20px;
            border: 2px solid blue;
            margin: 10px;
        }
        
        .footer {
            clear: both;
           
            border: 2px solid green;
            padding: 20px;
            margin: 10px;
        }

        
        .center-content {
            text-align: center;
        
            margin: 10px;
        }
       
    </style>
</head>
<body>
    <div class="header">
      
        <h1>header</h1>
    </div>
    
    <div class="sidebar-left">
       
        <h3>Sidebar Left</h3>
    </div>
    
    <div class="sidebar-right">
       
        <h3>Sidebar Right</h3>
    </div>
    
    <div class="center-content">
        @yield('content')
    </div>
    
    <div class="footer">
        
        <p>Footer</p>
    </div>
</body>
</html>
