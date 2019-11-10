USE bigprojectdb;

CREATE TABLE Testimony (
    id INT(10) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    message TEXT NOT NULL,
    name VARCHAR(50) NOT NULL,
    photo TEXT NOT NULL,
    time TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
);

INSERT INTO Testimony (message, name, photo)
VALUES ( 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Beatae, reprehenderit error voluptate animi ipsam, aliquam quo voluptates eos expedita quibusdam adipisci odit. Optio libero laboriosam aliquid unde repellat eligendi nesciunt.', 
        'Mike Thong', 
        'img/testmonial/smaill_thumb.png');

INSERT INTO Testimony (message, name, photo)
VALUES ( 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Beatae, reprehenderit error voluptate animi ipsam, aliquam quo voluptates eos expedita quibusdam adipisci odit. Optio libero laboriosam aliquid unde repellat eligendi nesciunt.', 
        'Mike Thong 2', 
        'img/testmonial/smaill_thumb.png');

CREATE TABLE Appointment (
    id INT(10) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    message TEXT NOT NULL,
    name VARCHAR(50) NOT NULL,
    email VARCHAR(50) NOT NULL,
    phone VARCHAR(50) NOT NULL,
    date DATE,
    time TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
);

INSERT INTO Appointment (message, name, email, phone, date)
VALUES ( 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Beatae, reprehenderit error voluptate animi ipsam, aliquam quo voluptates eos expedita quibusdam adipisci odit. Optio libero laboriosam aliquid unde repellat eligendi nesciunt.', 
        'Mike Thong 2', 
        'test@email.com',
        '082157343710',
        '2019-10-10');

CREATE TABLE Message (
    id INT(10) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    message TEXT NOT NULL,
    name VARCHAR(50) NOT NULL,
    email VARCHAR(50) NOT NULL,
    subject VARCHAR(50) NOT NULL,
    time TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
);

INSERT INTO Message (message, name, email, subject)
VALUES ( 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Beatae, reprehenderit error voluptate animi ipsam, aliquam quo voluptates eos expedita quibusdam adipisci odit. Optio libero laboriosam aliquid unde repellat eligendi nesciunt.', 
        'Mike Thong 2', 
        'test@email.com',
        'Somethings wrong');

CREATE TABLE Field (
    id INT(10) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(25) NOT NULL,
    description VARCHAR(255),
    photo TEXT
);

INSERT INTO Field (name)
VALUES ('Business Law', 'Some passage are blablabla', 'img/blog/blog_1.png');

INSERT INTO Field (name)
VALUES ('Education Law', 'Some passage are blablabla', 'img/blog/blog_2.png');

INSERT INTO Field (name)
VALUES ('Finance Law', 'Some passage are blablabla', 'img/blog/blog_3.png');

INSERT INTO Field (name)
VALUES ('Family Law', 'Some passage are blablabla', 'img/blog/blog_1.png');

CREATE TABLE Lawyer (
    id INT(10) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    field_id INT(10) UNSIGNED,
    name VARCHAR(50) NOT NULL,
    photo TEXT NOT NULL,
    time TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
    CONSTRAINT lawyer_field_fk
    FOREIGN KEY (field_id) 
       REFERENCES Field(id)
);

INSERT INTO Lawyer (field_id, name, photo)
VALUES (1, "Richard Kyle", 'img/lawyers/2.png');

INSERT INTO Lawyer (field_id, name, photo)
VALUES (2, "Charlotte Richard", 'img/lawyers/4.jpg');

INSERT INTO Lawyer (field_id, name, photo)
VALUES (3, "Watson Mumbigini", 'img/lawyers/3.png');

INSERT INTO Lawyer (field_id, name, photo)
VALUES (4, "Mike Singh", 'img/lawyers/1.png');

CREATE TABLE Education (
    lawyer_id INT(10) UNSIGNED,
    degree VARCHAR(10) NOT NULL,
    university VARCHAR(50) NOT NULL,
    study_field VARCHAR(50) NOT NULL,
    certificate TEXT NOT NULL,
    CONSTRAINT education_lawyer_fk
    FOREIGN KEY (lawyer_id)
    REFERENCES Lawyer(id) ON DELETE CASCADE
);

INSERT INTO Education (lawyer_id, degree, university, study_field, certificate)
VALUES (1, 'M.L', 'University of Tralala', 'Business Law', '1_biz_uot');

INSERT INTO Education (lawyer_id, degree, university, study_field, certificate)
VALUES (2, 'M.L', 'University of Tralala', 'Education Law', '3_edu_uot');

INSERT INTO Education (lawyer_id, degree, university, study_field, certificate)
VALUES (3, 'M.L', 'University of Tralala', 'Finance Law', '3_fin_uot');

INSERT INTO Education (lawyer_id, degree, university, study_field, certificate)
VALUES (4, 'M.L', 'University of Tralala', 'Family Law', '4_fam_uot');

INSERT INTO Education (lawyer_id, degree, university, study_field, certificate)
VALUES (4, 'M.L', 'University of Trilili', 'Finance Law', '4_fin_uotr');

CREATE TABLE Cases (
    id INT(10) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    field_id INT(10) UNSIGNED,
    lawyer_id INT(10) UNSIGNED,
    client_name VARCHAR(70) NOT NULL,
    description TEXT NOT NULL,
    photo TEXT NOT NULL,
    CONSTRAINT cases_lawyer_fk
    FOREIGN KEY (lawyer_id)
    REFERENCES Lawyer(id) ON DELETE CASCADE,
    CONSTRAINT cases_field_fk
    FOREIGN KEY (field_id)
    REFERENCES Field(id) ON DELETE RESTRICT
);


INSERT INTO Cases (field_id, lawyer_id, title, client_name, description, photo)
VALUES (1, 1, 'Transaction of kitten in Gang Delima', 'Jonathan X', 'A mega hit story in this year, and we are proud for had assisted this case', 'https://q-xx.bstatic.com/xdata/images/hotel/max500/91884522.jpg?k=94639cb08b7fdb3574179f087bc1ae9e1f2eb675f09eb5c667691368fe9c51e4&o=');

INSERT INTO Cases (field_id, lawyer_id, title, client_name, description, photo)
VALUES (2, 2, 'Child abuse in school', 'Mark X', 'A mega hit story in this year, and we are proud for had assisted this case', 'https://aifs.gov.au/cfca/sites/default/files/styles/242_square/public/images/events/istock-483374624-square.jpg?itok=qan49xm1');

INSERT INTO Cases (field_id, lawyer_id, title, client_name, description, photo)
VALUES (3, 3, 'Birmingham Bubble', 'Zayn X', 'A mega hit story in this year, and we are proud for had assisted this case', 'https://images-na.ssl-images-amazon.com/images/I/41p1z39oL8L._SX342_.jpg');

INSERT INTO Cases (field_id, lawyer_id, title, client_name, description, photo)
VALUES (4, 4, 'Justice on Road', 'Jonathan X', 'A mega hit story in this year, and we are proud for had assisted this case', 'https://i0.wp.com/bobarno.com/thiefhunters/wp-content/uploads/mumbai-beggar-family.jpg?resize=600%2C634');