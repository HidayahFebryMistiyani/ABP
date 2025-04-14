import 'dart:math';

// Fungsi untuk menghasilkan array 2D sesuai dengan aturan
List<List<int>> generateArray() {
  List<List<int>> array = [];

  // Baris 1: Kelipatan 6 mulai dari 6 (4 angka)
  List<int> row1 = List.generate(4, (index) => (index + 1) * 6);
  array.add(row1);

  // Baris 2: Bilangan ganjil berurutan mulai dari 3 (5 angka)
  List<int> row2 = List.generate(5, (index) => 3 + (index * 2));
  array.add(row2);

  // Baris 3: Bilangan pangkat tiga dari bilangan asli mulai dari 4 (6 angka)
  List<int> row3 = List.generate(6, (index) => pow(index + 4, 3).toInt());
  array.add(row3);

  // Baris 4: Bilangan asli berurutan beda 7 mulai dari 3 (7 angka)
  List<int> row4 = List.generate(7, (index) => 3 + (index * 7));
  array.add(row4);

  return array;
}


// Fungsi untuk menghitung FPB (Faktor Persekutuan Terbesar)
int hitungFPB(int a, int b) {
  while (b != 0) {
    int temp = b;
    b = a % b;
    a = temp;
  }
  return a;
}

void main() {
  // Menampilkan array 2D
  List<List<int>> array2D = generateArray();
  print("Isi List:");
  for (var row in array2D) {
    print(row.join(" "));
  }

  // Contoh menghitung FPB dari dua bilangan
  int bilangan1 = 12;
  int bilangan2 = 8;
  int fpb = hitungFPB(bilangan1, bilangan2);

  print("\nBilangan 1: $bilangan1");
  print("Bilangan 2: $bilangan2");
  print("FPB $bilangan1 dan $bilangan2 = $fpb");
}