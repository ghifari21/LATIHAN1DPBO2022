from TimSepakBola import TimSepakBola

# menggunakan constructor
Tim1 = TimSepakBola("Persib Bandung", "Indonesia", "1933", "Achmad Jufriyanto")

# menggunakan setter
Tim2 = TimSepakBola()
Tim2.setNama("Manchester United");
Tim2.setAsalNegara("Inggris");
Tim2.setTahunBerdiri("1878");
Tim2.setPemain("Christiano Ronaldo");

Tim1.printOut()
print("")
Tim2.printOut()