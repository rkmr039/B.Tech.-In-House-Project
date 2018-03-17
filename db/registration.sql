-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 06, 2017 at 09:31 PM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `registration`
--

-- --------------------------------------------------------

--
-- Table structure for table `bookinghistory`
--

CREATE TABLE `bookinghistory` (
  `aid` int(100) NOT NULL,
  `did` int(100) NOT NULL,
  `uname` varchar(255) NOT NULL,
  `date` varchar(255) NOT NULL,
  `time` varchar(255) NOT NULL,
  `category` varchar(255) NOT NULL,
  `filename` varchar(500) NOT NULL,
  `name` varchar(500) NOT NULL,
  `path` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bookinghistory`
--

INSERT INTO `bookinghistory` (`aid`, `did`, `uname`, `date`, `time`, `category`, `filename`, `name`, `path`) VALUES
(13, 105, 'user1', '2017-07-13', '04:09', 'neurologist', '', '', ''),
(14, 105, 'user1', '2017-07-19', '05:30', 'Heart,Brain', '', '', ''),
(17, 104, 'user2', '2017-07-12', '14:30', 'neurologist', '', '', ''),
(18, 107, 'rishab', '2017-07-15', '13:30', 'neurologist', '', '', ''),
(19, 104, 'pankaj', '2017-07-12', '17:40', 'neurologist', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `chat`
--

CREATE TABLE `chat` (
  `msg_id` int(11) NOT NULL,
  `uname` varchar(255) NOT NULL,
  `did` varchar(255) NOT NULL,
  `msg` varchar(255) NOT NULL,
  `date` timestamp(6) NOT NULL DEFAULT CURRENT_TIMESTAMP(6)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `chat`
--

INSERT INTO `chat` (`msg_id`, `uname`, `did`, `msg`, `date`) VALUES
(358, 'shreya', '115', 'hi', '2017-07-06 10:03:29.445526'),
(359, 'shreya', '115', 'money', '2017-07-06 10:04:15.857689'),
(360, 'shreya', '115', 'me', '2017-07-06 10:07:18.675261'),
(361, 'shreya', '115', 'I am having pimple problem', '2017-07-06 10:15:11.544380'),
(362, 'shreya', '115', 'yes', '2017-07-06 10:19:50.031559'),
(363, 'mihir', '101', 'hello doctor', '2017-07-06 10:21:49.803010'),
(364, 'mihir', '101', 'hello doctor', '2017-07-06 10:25:24.434245'),
(365, 'mihir', '101', 'I am mihir', '2017-07-06 10:25:39.284128'),
(366, 'mihir', '116', 'skin problems', '2017-07-06 10:30:54.313332'),
(367, 'mihir', '116', 'skin problems', '2017-07-06 10:34:25.335145'),
(368, 'mihir', '116', 'no', '2017-07-06 10:34:37.108535');

-- --------------------------------------------------------

--
-- Table structure for table `disease`
--

CREATE TABLE `disease` (
  `mid` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `med1` varchar(255) NOT NULL,
  `med2` varchar(255) NOT NULL,
  `med3` varchar(255) NOT NULL,
  `med4` varchar(255) NOT NULL,
  `med5` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `disease`
--

INSERT INTO `disease` (`mid`, `name`, `med1`, `med2`, `med3`, `med4`, `med5`) VALUES
(1, 'Acid indigestion and upset stomach', 'Bismuth subsalicylate', 'Histamine H2 receptor', 'hyoscyamine', 'clindamycin', 'erythromycin'),
(2, 'Acne', 'Isotretinoin', 'Keratolytics', 'Retinoids', 'Metronidazole', 'Benzoyl Peroxide'),
(3, 'Actinic Keratoses', 'Fluorouracil', 'Masoprocol', '', '', ''),
(4, 'Addison\'s Disease', 'Adrenocorticoids', '', '', '', ''),
(5, 'Acute Myocardial Infection', 'Beta-adrenergic', 'Thrombolytics', 'Angiotensin-receptor', '', ''),
(6, 'Aging', 'dehydroepiandrosterone', 'Transcriptase Inhibitors', '', '', ''),
(7, 'Aids and Hiv infection', 'Benzodiazepines', 'Beta adrenergic blocking agents', 'carbamazepine', 'Protease Inhibitors', ''),
(8, 'Alcohol Withdrawal', 'Benzodiazepines ', 'Carbamazepine ', 'Disulfiram', 'Hydroxizine ', 'Naltrexone '),
(9, 'Allergies and Allergic Reactions', 'Antihistamines ', 'Azelastine ', 'Ephedrine ', 'Cromolyn ', 'Hydroxyzine'),
(10, 'Alopecia', 'Dutasteride ', 'Finasteride ', 'Minoxidil\r\n', '', ''),
(11, 'Altitube Illness', 'Carbonic Anhydrase Inhibitors', '', '', '', ''),
(12, 'Alzheimer\'s Disease', 'Cholinesterase Inhibitors', 'Memantine', '', '', ''),
(13, 'Amebiasis', 'Chloroquine ', 'Iodoquinol ', 'Metronidazole', '', ''),
(14, 'Amenorrhea', 'Bromocriptine ', 'Progestins', '', '', ''),
(15, 'Amyotrophic Lateral Sclerosis (ALS)', 'Riluzole', '', '', '', ''),
(16, 'Anemia', 'Adrenocorticoids (Systemic)', 'Androgens ', 'Cyclosporine ', 'Folic Acid ', 'Vitamin B-12'),
(17, 'Angina', 'Antiplatelet Agents ', 'Beta Adrenergic Blocking Agents ', 'Calcium Channel Blockers', 'Ranolazine ', 'Nitrates'),
(18, 'Anorexia', 'Calcium Carbonate ', 'Calcium Gluconate ', 'Potassium Chloride ', 'Antidepressants, Tricyclic', ''),
(19, 'Anxiety', 'Barbiturates ', 'Benzodiazepines ', 'Beta Adrenergic Blocking Agents ', 'Buspirone', 'Hydroxyzine'),
(20, 'Appetite Stimulant', 'Antihistamines ', 'Dronabinol ', 'Megestrol', '', ''),
(21, 'Arthritis (Osteoarthritis, Rheumatoid Arthritis)', 'Acetaminophen ', 'Adrenocorticoids (Oral Inhalation, Systemic) ', 'Azathioprine ', 'Bronchodilators, Xanthine ', 'Hydroxycholroquine'),
(22, 'Asthma', 'Adrenocorticoids (Nasal Inhalation, Oral Inhalation, Systemic) ', 'Bronchodilators, Adrenergic', 'Ephedrine', 'Ipratropium ', 'Leukotriene Modifiers '),
(23, 'Athlete\'s Foot', 'Antibacterials ', 'Antifungals (Topical)', '', '', ''),
(24, 'Attention Deficit Hyperactivity Disorder (ADHD)', 'Amphetamines ', 'Atomoxetine ', 'Dexmethylphenidate ', 'Methylphenidate', 'Clonidine'),
(25, 'Autism', 'Haloperidol', '', '', '', ''),
(26, 'Bacterial Infections', 'Acetohydroxamic Acid (AHA) ', 'Antibiotics', '', '', ''),
(27, 'Benign Prostate Hyperplasia (BPH)', 'Alpha Adrenergic Receptor Blockers ', 'Dutasteride ', 'Finasteride', '', ''),
(28, 'Bipolar Disorder', '	Antipsychotics (Quetiapine, Olanzapine, Risperidone, Ziprasidone, Haloperidol) ', 'Anticonvulsants (Carbamazepine, Divalproex, Valproate Acid) ', 'Lithium', '', ''),
(29, 'Bites and Stings', 'Adrenocorticoids (Topical) ', 'Anesthetics (Topical)', '', '', ''),
(30, 'Bladder Inflammation', 'Dimethyl Sulfoxide', '', '', '', ''),
(31, 'Bladder Spasms', 'Clidinium ', 'Propantheline ', 'Oxybutynin', '', ''),
(32, 'Bleeding', 'Antifibrinolytic Agents ', 'Vitamin K', '', '', ''),
(33, 'Blood Circulation', 'Cyclandelate ', 'Intermittent Claudication Agents', 'Isoxsuprine ', 'Vitamin E', ''),
(34, 'Blood Clots', 'Anticoagulants (Oral) ', 'Antiplatelets (Clopidogrel, Dipyridamole, Ticlopidine) ', 'Aspirin', '', ''),
(35, 'Bronchial Spasms', 'Anticholinergics ', 'Bronchodilators', 'Adrenergic', '', ''),
(36, 'Bronchitis', 'Bronchodilators, Xanthine ', 'Dextromethorphan ', 'Ipratropium ', 'Cephalosporins ', 'Fluoroquinolones '),
(37, 'Bulilmia', 'Antidepressants, Tricyclic', 'Lithium ', 'Selective Serotonin Reuptake Inhibitors (SSRIs)', '', ''),
(38, 'Burns', 'Anesthetics (Topical) ', 'Zinc Supplements ', 'Silver Sulfadiazine ', 'Neomycin/Polymyxin B/Bacitracin topical', ''),
(39, 'Bursitis', 'Adrenocorticoids (Systemic) ', 'NSAIDs ', 'Aspirin', '', ''),
(40, 'Cancer', 'Aminoglutethimide ', 'Cyclophosphamide', 'Etoposide', 'Hydroxyurea', 'Levamisole '),
(41, 'Cancer Of The Skin', 'Fluorouracil ', 'Masoprocol ', 'Mechlorethamine (Topical)', '', ''),
(42, 'Canker Sores (Aphthous Ulcers)', 'Amlexanox ', 'Bioadherent ', 'Anesthetics (Mucosal-Local) ', 'Corticosteroids', ''),
(43, 'Chickenpox', 'Acyclovir ', 'Acetaminophen', 'Antihistamines', '', ''),
(44, 'Cholesterol, High', 'Cholestyramine ', 'Colestipol ', 'Ezetimibe ', 'Neomycin (Oral) ', 'Raloxifene'),
(45, 'Chronic Obstructive Pulmonary Disease (COPD)', 'Adrenocorticoids (Systemic) ', 'Bronchodilators, Adrenergic ', 'Bronchodilators, Xanthine ', 'Ipratropium \r\n', ' \r\nTiotropium'),
(46, 'Cirrhosis', 'Colchicine ', 'Cyclosporine ', 'Thiamine (Vitamin B-1)', '', ''),
(47, 'Colds and Cough', 'Acetaminophen ', 'Anticholinergics ', 'Antihistamines, Nonsedating ', 'Dextromethorphan', 'Guaifenesin '),
(48, 'Colic', 'Hyoscyamine ', 'Simethicone', '', '', ''),
(49, 'Congestion', 'Bronchodilators, Adrenergic \r\n', 'Oxymetazoline ', 'Phenylephrine ', 'Pseudoephedrine', 'Xylometazoline'),
(50, 'Congestive Heart Failure', 'Diuretics, Loop ', 'Angiotensin-Converting Enzyme (ACE) Inhibitors', 'Diuretics, Potassium-Sparing ', 'Diuretics, Potassium-Sparing and Hydrochlorothiazide', 'Diuretics, Thiazide '),
(51, 'Conjunctivitis (Pink Eye)', 'Antibacterials (Ophthalmic)', 'Antivirals (Ophthalmic)', '', '', ''),
(52, 'Conjunctivitis, Seasonal Allergic', 'NSAIDs (Ophthalmic) ', 'Antiallergic Agents (Ophthalmic)', '', '', ''),
(53, 'Constipation', 'Laxatives, Bulk-Forming (Psyllium) ', 'Laxatives, Osmotic (Lactulose) ', 'Laxatives, Softener/Lubricant ', 'Lubiprostone, Linaclotide ', 'Tegaserod'),
(54, 'Contraception (Birth Control)', 'Contraceptives, Oral and Skin ', 'Contraceptives, Vaginal ', 'Contraceprives, Vaginal (Spermicides)', '', ''),
(55, 'Convulsions (Epilepsy, Seizures)', 'Anticonvulsants, Hydantoin ', 'Benzodiazepines ', 'Divalproex ', 'Lamotrigine ', 'Oxcarbazepine '),
(56, 'Corneal Ulcers', 'Antibacterials (Ophthalmic)', '', '', '', ''),
(57, 'Cushing\'s Disease', 'Adrenocorticoids (Systemic) ', 'Aminoglutethimide ', 'Metyrapone ', 'Mitotane ', 'Trilostane'),
(58, 'Cystitis', 'Phenazopyridine ', 'Sulfonamides and Phenazopyridine ', 'Nitrofurantoin ', 'Nitrofurantoin ', 'Fluoroquinolones '),
(59, 'Dandruff', 'Antifungals (Topical) ', 'Antiseborrheics ', 'Coal Tar', '', ''),
(60, 'Dementia', 'Buspirone ', 'Cholinesterase Inhibitors', 'Ergoloid Mesylates ', 'Memantine ', 'Haloperidol'),
(61, 'Depression	', 'Antidepressants ', 'Ergoloid Mesylates ', 'Loxapine ', 'Maprotiline ', 'Methylphenidate '),
(62, 'Dermatitis', 'Adrenocorticoids (Systemic) ', 'Adrenocorticoids (Topical) ', 'Antiseborrheics ', 'Keratolytics', 'Dapsone '),
(63, 'Dermatomyositis', 'Aminobenzoate Potasium', '', '', '', ''),
(64, 'Diabetes', 'Biguanides', 'Sulfonylureas', 'Alpha-Glucosidase Inhibitors', 'Glucagon Like Peptide-1 (GLP-1) Agonists', ''),
(65, 'Diarrhea', 'Bismuth Subsalicylate ', 'Charcoal Activated ', 'Difenoxin and Atropine ', 'Kaolin, Pectin, Belladonna and Opium ', 'Nitazoxanide '),
(66, 'Dietary Supplements', 'Calcium Supplements ', 'Iron Supplements ', 'Niacin ', 'Vitamin A ', 'Vitamin B-12 '),
(67, 'Digestive Spasms', 'Clidinium ', 'Difenoxinand Atropine ', 'Dicyclomine ', 'Hyoscyamine ', 'Propantheline'),
(68, 'Diverticulitis', 'a', '', '', '', ''),
(69, 'a', 'Drowsiness', 'Caffeine ', 'Orphenadrine, Aspirin and Caffeine', '', ''),
(70, 'Dry Eyes', 'Protectant (Ophthalmic)', '', '', '', ''),
(71, 'Ear Allergies', 'Anti-Inflammatory Drugs, Steriodal (Otic)', '', '', '', ''),
(72, 'Ear Infections (Otitis Media)', 'Antibacterials (Otic) ', 'Anti-Inflammatory Drugs, Steriodal (Otic) ', 'Antipyrine ', 'Phenylephrine', ''),
(73, 'Ear Wax', 'Antipyrine and Benzocaine (Otic)', '', '', '', ''),
(74, 'Eczema', 'Adrenocorticoids (Topical) ', 'Antibacterials, Antifungals (Topical) ', 'Coal Tar ', 'Doxepin (Topical) ', 'Keratolytics'),
(75, 'Emphysema', 'Adrenocorticoids (Systemic) ', 'Bronchodilators, Adrenergic ', 'Bronchodilators, Xanthine ', 'Ipratropium ', 'Tiotropium'),
(76, 'Endometriosis', 'Danazol ', 'Nafareklin ', 'Goserelin ', 'Leuprolide ', 'Oral Contraceptives'),
(77, 'Erectile Dysfunction (Impotence)', 'Alprostadil ', 'Erectile Dysfunction Agents ', 'Papaverine ', 'Yohimbe', ''),
(78, 'Esophagitis', 'Histamine H2 Receptor Antagonists', 'Metoclopramide \r\n', 'Proton Pump Inhibitors', '', ''),
(79, 'Estrogen Deficiency', 'Estrogen', '', '', '', ''),
(80, 'Eye Allergies', 'Antiallergic Agents (Ophthalmic)', '', '', '', ''),
(81, 'Eye Conditions', 'Cromolyn ', 'Cycloplegic, Mydriatic (Ophthalmic) ', 'Cyclopentolate (Ophthalmic) ', 'Decongestants (Ophthalmic)', 'Natamycin (Ophthalmic) '),
(82, 'Fatigue', 'Caffeine', '', '', '', ''),
(83, 'Fever', 'Acetaminophen ', 'Barbiturates, Aspirin and Codeine ', 'Chlorzaxozine and Acetaminophen ', 'Salicylates', 'Narcotic Analgesics and Aspirin '),
(84, 'Fibrocystic Breast Disease', 'Danazol ', 'Vitaimin E', '', '', ''),
(85, 'Fluid Retention (Edema, Swelling)', 'Hydrochlorothiazide ', 'Carbonic Anhydrase Inhibitors ', 'Clonidine and Chlorthalidone ', 'Guanethidine and Hydrochlorothiazide ', 'Reserpine, Hydralazine and Hydrochlorothiazide'),
(86, 'Fungal Infections (Ringworm)', 'Antifungals, Azoles \r\n', 'Antifungals, Topical ', 'Griseofulvin ', 'Nystatin', ''),
(87, 'Gallstones', 'Ursodiol', '', '', '', ''),
(88, 'Gastroesophageal Reflux', 'Histamine H2 Receptor Antagonists ', 'Proton Pump Inhibitors ', 'Sucralfate', '', ''),
(89, 'Genital Warts (Condyloma Acuminatum)', 'Podofilox ', 'Imiquimod ', 'Papillomavirus Vaccines', '', ''),
(90, 'Giardiasis', 'Furazolidone, Quinacrine, Metronidazole, Nitazoxanide, Tinidazole', '', '', '', ''),
(91, 'Gingivitisand Gum Disease	', 'Chlorhexidine ', 'Erythromycins ', 'Penicillins ', 'Tetracyclines', ''),
(92, 'Glaucoma', 'Antiglaucoma, Adrenergic Antagonists ', 'Antiglaucoma, Anticholinesterases ', 'Antiglaucoma, Carbonic Anhydrase Inhibitors', 'Antiglaucoma, Prostaglandins ', 'Carbonic Anhydrase Inhibitors'),
(93, 'Gonorrhea', 'Cephalosporins ', 'Erythromycins ', 'Fluoroquinolones ', 'Macrolide Antibiotics ', 'Penicillins'),
(94, 'Gout', 'Adrenocorticoids (Systemic) ', 'Allopurinol ', 'Meloxicam', 'Probenecid and Colchicine ', 'Sulfinpyrazone'),
(95, 'Hair Loss (Baldness)', 'Antharil (Topical) ', 'Finasteride', 'Minoxidil (Topical)', '', ''),
(96, 'Hay Fever', 'Antiallergic Agents (Ophthalmic) ', 'Ephedrine', 'Antihistamines, Nonsedating ', 'Guaifenesin', 'Hydroxyzyne '),
(97, 'Headache (Cluster, Migraine, Sinus, Tension, Vascular)', 'Acetaminophen, Fioricet ', 'Barbiturates, Aspirin and Codeine ', 'Butorphanol ', 'Clonidine', 'Ergotamine, Belladonna and Phenobarbital'),
(98, 'Heart Rhythm Disorders (Irregular Heartbeat)', 'Amiodarone ', 'Disopyramide', 'Dofetilide ', 'Moricizine', 'Procainamide'),
(99, 'Heartburn (Indigestion)', 'Antacids ', 'Histamine H2 Receptor Antagonists ', 'Proton Pump Inhibitors', 'Sodium Bicarbonate', '');

-- --------------------------------------------------------

--
-- Table structure for table `doctor`
--

CREATE TABLE `doctor` (
  `did` int(40) NOT NULL,
  `dname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `locality` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `dmobile` varchar(400) NOT NULL,
  `category` varchar(255) NOT NULL,
  `day` varchar(255) NOT NULL,
  `time` varchar(255) NOT NULL,
  `imagelocation` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `doctor`
--

INSERT INTO `doctor` (`did`, `dname`, `email`, `password`, `locality`, `city`, `dmobile`, `category`, `day`, `time`, `imagelocation`) VALUES
(104, 'amit', '98', '79cfac6387e0d582f83a29a04d0bcdc4', 'jhkj', 'ggf', '7827206711', 'neurologist', 'mon', '8', '0'),
(107, 'Dr. Reddy', 'reddy@sha', 'fbad22358cba8de1ea13c57a2d92bdf9', 'janakpuri', 'delhi', '987654', 'ENT', 'weekdays', '8:30 am to 9:00 pm', 'uploads/slide10.PNG'),
(108, 'abcdef', 'abcdef@sha', 'e80b5017098950fc58aad83c8c14978e', 'kanakpuri', 'delhi', '8666', 'ENT', 'weekdays', '10:30 am to 6:30 pm', ''),
(109, 'asdfg', 'asdfg@sha', '040b7cf4a55014e185813e0644502ea9', 'lokhandwala', 'Mumbai', '34567', 'Heart', 'weekdays', '10:30 am to 6:30 pm', 'uploads/slide8.PNG');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `Name` varchar(100) NOT NULL,
  `dname` varchar(100) NOT NULL,
  `did` int(15) NOT NULL,
  `comments` varchar(1000) NOT NULL,
  `rating` int(10) NOT NULL,
  `fid` int(50) NOT NULL,
  `likes` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`Name`, `dname`, `did`, `comments`, `rating`, `fid`, `likes`) VALUES
('user2', 'Dr. Amit', 104, 'he is a good doctor for brain related issues.', 4, 1, 0),
('rishab', 'Dr. Reddy', 107, 'â€œThey always treat me with tender loving care. Because they really do care.â€', 4, 2, 0);

-- --------------------------------------------------------

--
-- Table structure for table `reply1`
--

CREATE TABLE `reply1` (
  `id` int(40) NOT NULL,
  `username` varchar(255) NOT NULL,
  `dname` varchar(255) NOT NULL,
  `msg` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `reply1`
--

INSERT INTO `reply1` (`id`, `username`, `dname`, `msg`) VALUES
(5, 'mihir', 'amit', 'yes'),
(6, 'shreya', 'amit', 'keep calm'),
(7, 'mihir', 'amit', 'no');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `Id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `Name` varchar(100) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone_no` int(11) NOT NULL,
  `age` int(30) NOT NULL,
  `dob` varchar(255) NOT NULL,
  `country` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `imagelocation` varchar(100) NOT NULL,
  `details` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`Id`, `username`, `Name`, `email`, `phone_no`, `age`, `dob`, `country`, `city`, `password`, `imagelocation`, `details`) VALUES
(62, 'user1', '', 'user1@sha', 0, 0, '', '', '', '24c9e15e52afc47c225b757e7bee1f9d', 'uploads/greenbk3.jpg', ''),
(63, 'user2', '', 'user2@sha', 0, 0, '', '', '', '7e58d63b60197ceb55a1c487989a3720', 'uploads/logo2.jpg', ''),
(64, 'rishab', '', 'rishab@sha', 98765, 20, '1997-01-10', 'india', 'delhi', '7e663263c00050dfe773e21dae3a31d8', 'uploads/greenbk.jpg', ''),
(65, 'Dr. ABC', '', 'abc@sha', 0, 0, '', '', '', '900150983cd24fb0d6963f7d28e17f72', '', ''),
(66, 'pankaj', '', 'pankaj@sha', 2147483647, 20, '1994-06-08', 'india', 'delhi', '95deb5011a8fe1ccf6552bb5bcda2ff0', 'uploads/dp.jpg', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bookinghistory`
--
ALTER TABLE `bookinghistory`
  ADD PRIMARY KEY (`aid`);

--
-- Indexes for table `chat`
--
ALTER TABLE `chat`
  ADD PRIMARY KEY (`msg_id`);

--
-- Indexes for table `disease`
--
ALTER TABLE `disease`
  ADD PRIMARY KEY (`mid`);

--
-- Indexes for table `doctor`
--
ALTER TABLE `doctor`
  ADD PRIMARY KEY (`did`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`fid`);

--
-- Indexes for table `reply1`
--
ALTER TABLE `reply1`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`Id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bookinghistory`
--
ALTER TABLE `bookinghistory`
  MODIFY `aid` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
--
-- AUTO_INCREMENT for table `chat`
--
ALTER TABLE `chat`
  MODIFY `msg_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=369;
--
-- AUTO_INCREMENT for table `disease`
--
ALTER TABLE `disease`
  MODIFY `mid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=106;
--
-- AUTO_INCREMENT for table `doctor`
--
ALTER TABLE `doctor`
  MODIFY `did` int(40) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=110;
--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `fid` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `reply1`
--
ALTER TABLE `reply1`
  MODIFY `id` int(40) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=67;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
