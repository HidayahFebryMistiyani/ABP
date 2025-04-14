import 'package:flutter/material.dart'; 
import 'package:http/http.dart' as http; 
import 'dart:convert'; 
 
// Model untuk Post 
class Post { 
  final int userId; 
  final int id; 
  final String title; 
  final String body; 
 
  Post({required this.userId, required this.id, required this.title, 
required this.body}); 
 
  factory Post.fromJson(Map<String, dynamic> json) { 
    return Post( 
      userId: json['userId'], 
      id: json['id'], 
      title: json['title'], 
      body: json['body'], 
    ); 
  } 
} 
 
// Service untuk Fetch Data dari API 
Future<List<Post>> fetchPosts() async { 
  final response = await 
http.get(Uri.parse('https://jsonplaceholder.typicode.com/posts')); 
 
  if (response.statusCode == 200) { 
    List jsonResponse = json.decode(response.body); 
    return jsonResponse.map((post) => Post.fromJson(post)).toList(); 
  } else { 
    throw Exception('Failed to load posts'); 
  } 
} 
 
// Widget Utama 
void main() { 
  runApp(MyApp()); 
} 
 
class MyApp extends StatelessWidget { 
  @override 
  Widget build(BuildContext context) { 
    return MaterialApp( 
      title: 'GET JSON Demo', 
      theme: ThemeData( 
        primarySwatch: Colors.blue, 
      ), 
      home: PostListScreen(), 
    ); 
  } 
} 
 
// Widget untuk Menampilkan Daftar Post 
class PostListScreen extends StatefulWidget { 
  @override 
  _PostListScreenState createState() => _PostListScreenState(); 
} 
 
class _PostListScreenState extends State<PostListScreen> { 
  late Future<List<Post>> futurePosts; 
 
  @override 
  void initState() { 
    super.initState(); 
    futurePosts = fetchPosts(); 
  } 
 
  @override 
  Widget build(BuildContext context) { 
    return Scaffold( 
      appBar: AppBar(title: Text('List of Posts')), 
      body: FutureBuilder<List<Post>>( 
        future: futurePosts, 
        builder: (context, snapshot) { 
          if (snapshot.hasData) { 
            List<Post> posts = snapshot.data!; 
            return ListView.builder( 
              itemCount: posts.length, 
              itemBuilder: (context, index) { 
                return Card( 
                  margin: EdgeInsets.all(10), 
                  elevation: 4, 
                  shape: RoundedRectangleBorder(borderRadius: 
BorderRadius.circular(10)), 
                  child: Padding( 
                    padding: const EdgeInsets.all(10), 
                    child: Column( 
                      crossAxisAlignment: CrossAxisAlignment.start, 
                      children: [ 
                        Text( 
                          posts[index].title, 
                          style: TextStyle(fontWeight: FontWeight.bold, 
fontSize: 18), 
                        ), 
                        SizedBox(height: 5), 
                        Text( 
                          posts[index].body, 
                          style: TextStyle(color: Colors.grey[700]), 
                        ), 
                      ], 
                    ), 
                  ), 
                ); 
              }, 
            ); 
          } else if (snapshot.hasError) { 
            return Center(child: Text("Error: ${snapshot.error}")); 
          } 
          return Center(child: CircularProgressIndicator()); 
        }, 
      ), 
    ); 
  } 
} 