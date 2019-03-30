var app = new Framework7({
  // App root element
  root: '#app',
  // App Name
  name: 'My App',
  // App id
  id: 'com.myapp.test',
  // Enable swipe panel
  panel: {
    swipe: 'left',
  },
  // Add default routes
  routes: [
    {
      path: '/about/',
      url: 'pages/about.html',
    }, 
    
    {    
      path: '/tambah_data_kamar/',
      url: 'pages/tambah_data_kamar.html',
    },
      
  ],
  // ... other parameters
});

var mainView = app.views.create('.view-main');