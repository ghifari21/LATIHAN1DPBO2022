public class main
{
    public static void main(String[] args)
    {
        // menggunakan constructor
        TimSepakBola Tim1 = new TimSepakBola("Persib Bandung", "Indonesia", "1933", "Achmad Jufriyanto");

        // menggunakan setter
        TimSepakBola Tim2 = new TimSepakBola();
        Tim2.setNama("Manchester United");
        Tim2.setAsalNegara("Inggris");
        Tim2.setTahunBerdiri("1878");
        Tim2.setPemain("Christiano Ronaldo");

        Tim1.printOut();
        System.out.println();
        Tim2.printOut();
    }
}