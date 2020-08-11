import random

item = [
    {
        'id': 'A00001',
        'nama': 'Minyak Masak Terpakai',
        'harga': str(random.uniform(0.00, 100.00))
    },
    {
        'id': 'B00001',
        'nama': 'Kertas Lama',
        'harga': str(random.uniform(0.00, 100.00))
    },
    {
        'id': 'B00002',
        'nama': 'Surat Khabar Lama',
        'harga': str(random.uniform(0.00, 100.00))
    },
    {
        'id': 'C00001',
        'nama': 'Plastik Terpakai',
        'harga': str(random.uniform(0.00, 100.00))
    },
    {
        'id': 'D00001',
        'nama': 'Besi Buruk',
        'harga': str(random.uniform(0.00, 100.00))
    }
]

base = 'insert into item_kitar_semula(idItem, namaItem, hargaPerKiloItem) values '

for i in item:
    value = f"('{i['id']}','{i['nama']}','{i['harga']}'),"
    base += value

print(base)

"""
insert into item_kitar_semula(idItem, namaItem, hargaPerKiloItem) values ('A00001','Minyak Masak Terpakai','49.48446664346212'),('B00001','Kertas Lama','69.32669787953517'),('B00002','Surat Khabar Lama','63.206852368650814'),('C00001','Plastik Terpakai','84.34300720496346'),('D00001','Besi Buruk','1.0411314666541993')
"""