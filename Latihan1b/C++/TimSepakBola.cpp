#include <string>
#include <iostream>

using namespace std;

class TimSepakBola
{
    private:
        string nama;
        string asalNegara;
        string tahunBerdiri;
        string pemain;
    
    public:
        // constructor
        TimSepakBola() {}

        TimSepakBola(string nama, string asalNegara, string tahunBerdiri, string pemain)
        {
            this->nama = nama;
            this->asalNegara = asalNegara;
            this->tahunBerdiri = tahunBerdiri;
            this->pemain = pemain;
        }

        // setter and getter method
        void setNama(string nama)
        {
            this->nama = nama;
        }

        string getNama()
        {
            return this->nama;
        }

        void setAsalNegara(string asalNegara)
        {
            this->asalNegara = asalNegara;
        }

        string getAsalNegara()
        {
            return this->asalNegara;
        }

        void setTahunBerdiri(string tahunBerdiri)
        {
            this->tahunBerdiri = tahunBerdiri;
        }

        string getTahunBerdiri()
        {
            return this->tahunBerdiri;
        }

        void setPemain(string pemain)
        {
            this->pemain = pemain;
        }

        string getPemain()
        {
            return this->pemain;
        }

        // output
        void printOut()
        {
            cout << "Nama Tim       : " << this->getNama() << endl;
            cout << "Asal Negara    : " << this->getAsalNegara() << endl;
            cout << "Tahun Berdiri  : " << this->getTahunBerdiri() << endl;
            cout << "Pemain         : " << this->getPemain() << endl;
        }

        ~TimSepakBola() {}
};