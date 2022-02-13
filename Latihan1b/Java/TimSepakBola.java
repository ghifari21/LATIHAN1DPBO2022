public class TimSepakBola
{
    private String nama;
    private String asalNegara;
    private String tahunBerdiri;
    private String pemain;

    // constructor
    public TimSepakBola() {}

    public TimSepakBola(String nama, String asalNegara, String tahunBerdiri, String pemain)
    {
        this.nama = nama;
        this.asalNegara = asalNegara;
        this.tahunBerdiri = tahunBerdiri;
        this.pemain = pemain;
    }

    // setter and getter method
    public void setNama(String nama)
    {
        this.nama = nama;
    }

    public String getNama()
    {
        return this.nama;
    }

    public void setAsalNegara(String asalNegara)
    {
        this.asalNegara = asalNegara;
    }

    public String getAsalNegara()
    {
        return this.asalNegara;
    }

    public void setTahunBerdiri(String tahunBerdiri)
    {
        this.tahunBerdiri = tahunBerdiri;
    }

    public String getTahunBerdiri()
    {
        return this.tahunBerdiri;
    }

    public void setPemain(String pemain)
    {
        this.pemain = pemain;
    }

    public String getPemain()
    {
        return this.pemain;
    }

    // output
    public void printOut()
    {
        System.out.println("Nama Tim        : " + this.getNama());
        System.out.println("Asal Negara     : " + this.getAsalNegara());
        System.out.println("Tahun Berdiri   : " + this.getTahunBerdiri());
        System.out.println("Pemain          : " + this.getPemain());
    }
}
