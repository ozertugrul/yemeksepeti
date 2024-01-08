-- Kullanıcılar tablosu
CREATE TABLE Kullanicilar (
    KullaniciID INT PRIMARY KEY AUTO_INCREMENT,
    Adi VARCHAR(50) NOT NULL,
    Soyadi VARCHAR(50) NOT NULL,
    Eposta VARCHAR(100) NOT NULL UNIQUE,
    Sifre VARCHAR(100) NOT NULL,
    TelNo VARCHAR(100) NOT NULL,
    dogumTarihi VARCHAR(100) NOT NULL
);

CREATE TABLE Dukkanlar (
    dukkan_id INT PRIMARY KEY AUTO_INCREMENT,
    dukkan_adi VARCHAR(100) NOT NULL,
    dukkan_adresi VARCHAR(255) NOT NULL
    dukkkan_sehiri VARCHAR(100) NOT NULL,
    dukkan_mstutar INT,
);

-- Ürünler tablosu
CREATE TABLE Urunler (
    UrunID INT PRIMARY KEY AUTO_INCREMENT,
    UrunAdi VARCHAR(100) NOT NULL,
    Fiyat DECIMAL(10, 2) NOT NULL,
    MagazaID INT,
    FOREIGN KEY (MagazaID) REFERENCES Magazalar(MagazaID)
);

-- Siparişler tablosu
CREATE TABLE Siparisler (
    SiparisID INT PRIMARY KEY AUTO_INCREMENT,
    KullaniciID INT,
    UrunID INT,
    Adet INT,
    Tarih TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    FOREIGN KEY (KullaniciID) REFERENCES Kullanicilar(KullaniciID),
    FOREIGN KEY (UrunID) REFERENCES Urunler(UrunID)
);
