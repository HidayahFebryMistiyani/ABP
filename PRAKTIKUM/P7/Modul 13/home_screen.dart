import 'package:flutter/material.dart';
import 'package:provider/provider.dart';
import 'cart_model.dart';
import 'item.dart';
import 'cart_screen.dart';

class HomeScreen extends StatelessWidget {
  const HomeScreen({super.key});

  // Menggunakan 'const' agar tidak ada error pada list
  final List<Item> availableItems = const [
    Item(name: "Indomie Goreng", price: 2500000),
    Item(name: "Beng Beng", price: 300000),
    Item(name: "Zara", price: 12000000),
    Item(name: "Dior", price: 50000000),
    Item(name: "Cressida", price: 890000),
    Item(name: "Rabbani", price: 900000),
    Item(name: "Cardinal Slim Fit", price: 2600000),
    Item(name: "Mamm", price: 35000),
    Item(name: "Acer", price: 900000),
  ];

  @override
  Widget build(BuildContext context) {
    return Scaffold(
      appBar: AppBar(
        title: const Text("Olshopping"),
        actions: [
          IconButton(
            icon: const Icon(Icons.shopping_cart),
            onPressed: () {
              Navigator.push(
                context,
                MaterialPageRoute(builder: (context) => const CartScreen()),
              );
            },
          ),
        ],
      ),
      body: ListView.builder(
        itemCount: availableItems.length,
        itemBuilder: (context, index) {
          final item = availableItems[index];
          return ListTile(
            title: Text(item.name),
            subtitle: Text(item.formattedPrice),
            trailing: ElevatedButton(
              onPressed: () {
                Provider.of<CartModel>(context, listen: false).add(item);
              },
              child: const Text("Tambah"),
            ),
          );
        },
      ),
    );
  }
}