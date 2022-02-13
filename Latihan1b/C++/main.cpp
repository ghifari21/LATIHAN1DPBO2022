#include <string>
#include <iostream>
#include "TimSepakBola.cpp"

using namespace std;

int main(int argc, char const *argv[])
{
    // menggunakan constructor
    TimSepakBola Tim1("Persib Bandung", "Indonesia", "1933", "Achmad Jufriyanto");

    // menggunakan setter
    TimSepakBola Tim2;
    Tim2.setNama("Manchester United");
    Tim2.setAsalNegara("Inggris");
    Tim2.setTahunBerdiri("1878");
    Tim2.setPemain("Christiano Ronaldo");

    Tim1.printOut();
    cout << endl;
    Tim2.printOut();

    return 0;
}

