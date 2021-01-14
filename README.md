# frist-symfony-API

In this API, The first model I created is a Post entity which has 4 attributes (id, userId, title, body) which all have getters and setters. Since I used an ORM architecture (Object-Relational Mapping) the entity will automatically be created in the MySql database which I connected to the API and every manipulation on the Post objects will have its direct effect on the MySql Database.

The main controller is the PostsController. Until now it is capable of handling requests such as getting all the posts from the database (method:Get, route: path/posts), getting a post using its id (method:Get, route: path/posts/{id}) and creating a post (method:Post, route: path/posts) which will appear as a new row in the post table in the database.

I also implemented a PostType form which is the form that we use while we create a new Post in the PostsController since I wanted the logic in the controller to be minimal.  
