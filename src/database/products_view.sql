create view `products_view` as
select p.id, p.name, p.description, c.name as category,  p.std_price, i.filename, i.alt_text
from products p join images i on p.images_id = i.id join categories c on p.categories_id = c.id
order by name;