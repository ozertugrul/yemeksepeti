-- Kullanıcılar tablosu
CREATE TABLE Kullanicilar (
    KullaniciID INT PRIMARY KEY AUTO_INCREMENT,
    Adi VARCHAR(50) NOT NULL,
    Soyadi VARCHAR(50) NOT NULL,
    Eposta VARCHAR(100) NOT NULL UNIQUE,
    Sifre VARCHAR(100) NOT NULL,
    cep_telefonu VARCHAR(100) NOT NULL,
    dogum_tarihi VARCHAR(100) NOT NULL
);

-- Mağazalar tablosu
CREATE TABLE Magazalar (
    MagazaID INT PRIMARY KEY AUTO_INCREMENT,
    MagazaAdi VARCHAR(100) NOT NULL,
    Adres VARCHAR(255) NOT NULL
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
