create view `cart_view` as
select p.id as products_id, m.id as members_id, i.filename, i.alt_text, p.name as p_name, p.std_price, p.std_price*mhp.amount as total_price, mhp.amount
from member_has_products mhp    join products p on mhp.products_id = p.id
                                join images i on p.images_id = i.id
                                join members m on mhp.members_id = m.id
order by name;