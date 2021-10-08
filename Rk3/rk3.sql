CREATE TABLE contries (city VARCHAR(50), country VARCHAR(50), population int(11), code INT(7));
INSERT INTO contries (city, country, population, code) VALUES
('Moscow', 'Russia', '140000000', '351719'),
('Saint-Peterburg', 'Russia', '140000000', '351719'),
('New-Yourk', 'USA', '200000000', '473567'),
('Tokio', 'Japan', '300000000', '578912'),
('Hon-cong', 'China', '1000000000', '906789'),
('London', 'UK', '90000000', '472628'),
('Paris', 'Franse', '80000000', '503421'),
('Kiev', 'Ukrain', '65000000', '245890'),
('Minsk', 'Belorussia', '25000000', '398567'),
('Los-Angeles', 'USA', '200000000', '896535'),
('Rio-da-genairo', 'Brazil', '98000000', '982571');

#
UPDATE contries SET population='150000000' WHERE country='Russia';
#
SELECT country, population, code, city FROM contries ORDER BY country;
