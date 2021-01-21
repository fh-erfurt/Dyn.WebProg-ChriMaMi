create view `products_view` as
select p.id, p.name, p.description, p.category,  p.std_price, i.filename, i.alt_text
from products p join images i on p.images_id = i.id;