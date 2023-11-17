# DataWare, entreprise innovante souhaitant révolutionner sa gestion du personnel en utilisant PHP et SQL. Le site devra comporter quatre pages principales : la page d'accueil, la page des programmes, la page Plans avec un formulaire et la page de gallery. 


# Structure des Fichiers: 
index.php : La page de login, contenant un formulaire;

PHP/:
home.php : La page d'acceuil qui contient tous le personnel de dataware;
connect.html : Un fichier contenant le code de la connexion avec la base de données avec mysqli procedurale.
et d'autres pahes dont je cite : create.php pour ajouter un nouvel utilisateur / modify.php pour le modifier / myTeam.php pour modifier l'equipe / project.php pour filtrer vi projet et finalement team.php pour filtrer en utilisant l'id de l'equipe

assets/: Ce dossier contient les images utilisées durant le developpement du site.

css/ : Ce dossier contient les fichiers CSS nécessaires pour styliser le site.

UML/: Contient un fichier format pdf contenant 3 diagrammes : 
1.Diagramme de cas d'utilisation
2.Diagramme de classe
4.Diagramme de sequence

SQL/: Contient un fichier format sql contenant toutes les requetes utilisées: 

# CREATE database dataware;
# USE dataware;

# CREATE TABLE users (`id` INT NOT NULL AUTO_INCREMENT , `matricule` VARCHAR(25) NOT NULL , `nom` VARCHAR(25) NOT NULL , `prenom` VARCHAR(25) NOT NULL , `date_naissance` DATE NOT NULL , `service` VARCHAR(50) NOT NULL , `adresse` VARCHAR(150) NOT NULL , `tel` INT(10) NOT NULL , `email` VARCHAR(50) NOT NULL , `password` VARCHAR(25) NOT NULL , `role` INT(1) NOT NULL DEFAULT '0' , `deleted` INT(1) NOT NULL DEFAULT '0' , PRIMARY KEY (`id`));
# CREATE TABLE team (`idEquipe` INT NOT NULL AUTO_INCREMENT , `nomEquipe` VARCHAR(25) NOT NULL , `date_creation` DATE NOT NULL , `projet` VARCHAR(50) NOT NULL , `description` VARCHAR(150) NOT NULL , PRIMARY KEY (`id`));

# ALTER TABLE users ADD id_equipe INTEGER, ADD CONSTRAINT FOREIGN KEY(id_equipe) REFERENCES team(id);
# ALTER TABLE users ADD status varchar(25);

# INSERT INTO team 
VALUES 
    ('WebWizards', '2023-06-04', 'QuantumSphere', 'Transforming concepts into magical digital realities; designers, PM, front-end, back-end, full-stack devs ensure harmony.'), 
    ('TechTitans', '2023-08-02', 'CyberNexa', 'Frontiers of technological innovation; designers, PM, front-end, back-end, full-stack devs ensure technological prowess.'), 
    ('ByteBridges', '2023-08-24', 'DataForge', 'Building robust digital bridges; designers, PM, front-end, back-end, full-stack devs construct a reliable ecosystem.'), 
    ('PixelPioneers', '2023-04-10', 'EchoSync', 'Pushing design and tech boundaries; designers, PM, front-end, back-end, full-stack devs redefine user experiences.'), (NULL, 'CodeCrafters', '2023-07-22', 'CodeHarbor', 'Crafting seamless digital experiences; designers, PM, front-end, back-end, full-stack devs ensure holistic project success.');

# INSERT INTO users (`matricule`, `nom`, `prenom`, `date_naissance`, `service`, `adresse`, `tel`, `email`, `password`, `role`, `deleted`, `id_equipe`, `status`)
VALUES
    ('M001', 'Doe', 'John', '1990-01-01', 'IT', '123 Main St', 1234567890, 'john.doe@example.com', 'password123', 1, 0, 1, 'active'),
    ('M002', 'Smith', 'Jane', '1992-03-15', 'HR', '456 Oak St', 9876543210, 'jane.smith@example.com', 'pass456', 1, 0, 2, 'active'),
    ('M003', 'Johnson', 'Bob', '1988-07-22', 'Finance', '789 Maple St', 5556667777, 'bob.j@example.com', 'secret789', 1, 0, 3, 'active'),
    ('M004', 'Williams', 'Alice', '1995-05-10', 'Marketing', '101 Pine St', 9998887777, 'alice.w@example.com', 'alicepass', 1, 0, 4, 'active'),
    ('M005', 'Brown', 'Chris', '1985-11-30', 'Operations', '202 Cedar St', 1112223333, 'chris.b@example.com', 'securepass', 1, 0, 5, 'active'),
    ('M006', 'Lee', 'David', '1993-04-05', 'IT', '111 Elm St', 4445556666, 'david.lee@example.com', 'davidpass', 0, 0, 1, 'active'),
    ('M007', 'Chen', 'Sophie', '1991-08-18', 'HR', '222 Birch St', 7778889999, 'sophie.c@example.com', 'sophie123', 0, 0, 2, 'active'),
    ('M008', 'Garcia', 'Carlos', '1987-12-12', 'Finance', '333 Pine St', 1231234567, 'carlos.g@example.com', 'carlospass', 0, 0, 3, 'active'),
    ('M009', 'Taylor', 'Emma', '1996-02-28', 'Marketing', '444 Oak St', 9876543210, 'emma.t@example.com', 'emmapass', 0, 0, 4, 'active'),
    ('M010', 'Kim', 'Daniel', '1986-06-20', 'Operations', '555 Maple St', 1112223333, 'daniel.k@example.com', 'danpass', 0, 0, 5, 'active'),
    ('M011', 'Jones', 'Michael', '1989-09-12', 'IT', '606 Walnut St', 5554443333, 'michael.j@example.com', 'mikepass', 0, 0, 1, 'congé'),
    ('M012', 'Harris', 'Olivia', '1994-01-25', 'HR', '707 Pine St', 2223334444, 'olivia.h@example.com', 'oliviapass', 0, 0, 2, 'congé'),
    ('M013', 'Clark', 'Ryan', '1984-06-08', 'Finance', '808 Cedar St', 7778889999, 'ryan.c@example.com', 'ryanpass', 0, 0, 3, 'congé'),
    ('M014', 'Miller', 'Ava', '1997-03-03', 'Marketing', '909 Birch St', 1112223333, 'ava.m@example.com', 'avapass', 0, 0, 4, 'congé'),
    ('M015', 'Lopez', 'Ethan', '1983-12-01', 'Operations', '1010 Main St', 9876543210, 'ethan.l@example.com', 'ethanpass', 0, 0, 5, 'congé');

#SELECT * FROM users INNER JOIN team on team.idEquipe = users.id_equipe ORDER BY id ASC;

#lien github: https://github.com/zinebMachrouh/brief-05
