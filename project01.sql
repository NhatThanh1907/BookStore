-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th4 21, 2023 lúc 01:08 PM
-- Phiên bản máy phục vụ: 10.4.27-MariaDB
-- Phiên bản PHP: 8.0.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `project01`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `admin`
--

CREATE TABLE `admin` (
  `id_admin` int(11) NOT NULL,
  `name_admin` varchar(50) NOT NULL,
  `email_admin` varchar(50) NOT NULL,
  `password_ad` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `book`
--

CREATE TABLE `book` (
  `id_categories` int(11) NOT NULL,
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `amount` int(50) NOT NULL,
  `price` int(50) NOT NULL,
  `image` varchar(100) NOT NULL,
  `status` varchar(50) NOT NULL,
  `content` varchar(10000) NOT NULL,
  `author` varchar(50) NOT NULL,
  `size` varchar(50) NOT NULL,
  `bookcover` varchar(50) NOT NULL,
  `numberpages` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `book`
--

INSERT INTO `book` (`id_categories`, `id`, `name`, `amount`, `price`, `image`, `status`, `content`, `author`, `size`, `bookcover`, `numberpages`) VALUES
(3, 11, 'My Hero Academia - Tập 27: One’s Justice', 200, 20000, '01.jpg', '1', 'Cuối cùng chiến lược đột kích đồng loạt của giới siêu anh hùng đã triển khai. Toàn bộ công sức nằm vùng bấy lâu cũng đều vì khoảnh khắc áp chế được Chiến Tuyến Giải Phóng Siêu Năng này! Tôi nhất định sẽ bay nhanh hơn tất thảy! Tất cả vì mọi người, giống vị siêu anh hùng mình ngưỡng mộ từ thuở bé! “Plus Ultra”!!', 'Kohei Horikoshi', '19 x 27 cm', 'Bìa gập', 168),
(3, 12, 'ブルーロック 3 - Blue Lock 3', 1000, 145800, '02.jpg', '1', 'Một huấn luyện viên trẻ điên rồ tập hợp các cầu thủ bóng đá từ khắp đất nước để thi đấu trong một loạt thử thách kỳ lạ trong một đấu trường công nghệ cao mà anh ta gọi là Blue Lock. Đó là một trận chiến không có giới hạn để trở thành tiền đạo hàng đầu tiếp theo của Nhật Bản, trong manga Squid Game –meets–World Cup này, hiện đã có bản in! Anime đang phát sóng! BẠN SẼ TẠO BỎ QUÁ KHỨ CHƯA? Thưởng thức hương vị ngọt ngào của chiến thắng trước Đội Y, Đội Z tràn đầy năng lượng để đối đầu với đối thủ t', 'Kaneshiro Muneyuki', '18.3 x 13 x 1.3 cm', 'Bìa Mềm', 192),
(2, 21, 'Chưa Kịp Lớn Đã Trưởng Thành (Tái Bản 2023)', 0, 63200, 'chualon.jpg', '0', 'Chưa Kịp Lớn Đã Trưởng Thành\r\n\r\nChúng ta của hiện tại, đều chưa kịp lớn đã phải trưởng thành.\r\n\r\nLúc còn nhỏ có thể khóc cười tuỳ ý. Trưởng thành rồi mới biết hành động cũng cần nhìn sắc mặt người khác.\r\n\r\nLúc còn nhỏ có thể sống vô tư, vô lo. Trưởng thành rồi mới biết nếu chậm chân hơn người khác, chắc chắn sẽ bị đào thải bất cứ lúc nào.\r\n\r\nLúc còn nhỏ có thể khao khát, mơ mộng. Trưởng thành rồi mới biết thế giới ngoài kia thực sự rất tàn khốc.', 'Tớ Là Mây', '17 x 14 x 1.1 cm', 'Bìa Mềm', 240),
(3, 22, 'One Piece - Tập 97 (Tái Bản)', 0, 22500, 'onepiece97.jpg', '0', 'Ngay trước cuộc chinh phạt diễn ra, Kanjuro bất ngờ có động thái lạ... Chưa kể Momono suke còn bị bắt cóc... Trong lúc Kinemon và mọi người đang tuyệt vọng tràn trề, Luffy - Law - Kid bất ngờ xuất trận, mang lại nguồn sáng mới cho cả bọn!! Cả binh đoàn rồng rắn thẳng tiến về đảo Quỷ!!', 'Eiichiro Oda', '17.6 x 11.3 x 1 cm', 'Bìa Mềm', 196),
(3, 31, 'Thanh Gươm Diệt Quỷ - Kimetsu No Yaiba - Tập 12: Các Thượng Huyền Tập Hợp', 200, 22250, 'thanh-guom-diet-quy-tap-12.jpg', '1', 'Thanh Gươm Diệt Quỷ - Kimetsu No Yaiba - Tập 12: Các Thượng Huyền Tập Hợp\r\n\r\n113 năm rồi mới để mất một Thượng huyền, Muzan nổi cơn thịnh nộ, ra mệnh lệnh tiếp theo với các Thượng huyền còn lại. Trong khi đó, Tanjiro làm mẻ gươm trong trận chiến với Gyutaro và giờ phải đối mặt với cơn giận dữ của Haganezuka. Cậu lên đường đến làng thợ rèn nơi Haganezuka sống để tìm kiếm thanh gươm mới cho mình, nhưng điều gì đang chờ đón cậu ở phía trước…!?', 'Koyoharu Gotouge', '17.6 x 11.3 cm', 'Bìa Mềm', 192),
(19, 32, 'Cây Cam Ngọt Của Tôi', 450, 86400, 'caycam.jpg', '1', '“Vị chua chát của cái nghèo hòa trộn với vị ngọt ngào khi khám phá ra những điều khiến cuộc đời này đáng sống... một tác phẩm kinh điển của Brazil.” - Booklist\r\n\r\n“Một cách nhìn cuộc sống gần như hoàn chỉnh từ con mắt trẻ thơ… có sức mạnh sưởi ấm và làm tan nát cõi lòng, dù người đọc ở lứa tuổi nào.” - The National\r\n\r\nHãy làm quen với Zezé, cậu bé tinh nghịch siêu hạng đồng thời cũng đáng yêu bậc nhất, với ước mơ lớn lên trở thành nhà thơ cổ thắt nơ bướm. Chẳng phải ai cũng công nhận khoản “đáng', 'José Mauro de Vasconcelos', '20 x 14.5 cm', 'Bìa Mềm', 244),
(3, 33, 'My Hero Academia - Học Viện Siêu Anh Hùng Tập 5: Todoroki Shoto: Khởi Đầu (Tái Bản 2019)', 50, 20000, 'image_186914.jpg', '1', 'ĐẦUTRẬN CUỐI CÙNG trong VÒNG ĐẤU CHÍNH THỨC!! Trước một đối thủ siêu đáng gờm như Bakugo, Uraraka vẫn giữ tinh thần hăng hái.\r\nCả hai bên đều dốc hết sức mình vào cuộc so tài. Mọi người vừa là bạn , vừa là ĐỐI THỦ ! Mình cũng phải đấu một trận không hổ thẹn để trở thành siêu anh hùng giống như anh hai mới được!', 'Kohei Horikoshi', '17.6 x 11.3 x 1.2 cm', 'Bìa Mềm', 192),
(3, 66, '\r\nTiểu Thuyết The Movie Chú Thuật Hồi Chiến Tập 0', 10, 63200, '04.jpg', '1', 'Cậu học sinh trung học Okkotsu Yuta luôn khốn đốn vì bị Rika - cô bạn thanh mai trúc mã hóa thành “lời nguyền” ám theo. Đúng lúc đó, Gojo Satoru - chú thuật sư mạnh nhất xuất hiện, dẫn dắt cậu vào trường chuyên chú thuật. Tại ngôi trường học về “lời nguyền” để thanh tẩy “lời nguyền” ấy, Yuta hạ quyết tâm giải trừ lời nguyền của Rika và cùng các bạn đặt chân lên con đường trở thành chú thuật sư.\r\n', 'Gege Akutami, Ballad Kitaguni, Hiroshi Seko', '19 x 13 x 1.5 cm', 'Bìa Mềm', 300),
(22, 67, '\r\nLâu Đài Bay Của Pháp Sư Howl (Tái Bản 2019)', 10, 90100, '05.jpg', '1', 'Cô gái Sophie Hatter đang sống và làm việc yên ổn trong cửa hiệu bán mũ của bố mẹ ở Ingary, xứ sở của những đôi ủng bảy lý và áo tàng hình thì bỗng một ngày, mụ phù thuỷ xứ Waste xuất hiện biến cô thành bà già xấu xí. Quyết tâm giải cứu bản thân mình, Sophie đi tới lâu đài bay tìm kiếm sự giúp đỡ của Pháp sư Howl - kẻ vốn bị đồn là khoái “ăn tươi nuốt sống” trái tim của những cô gái trẻ.\r\n\r\n“…Sophie ngậm ngón tay bị bỏng nhẹ và lấy tay kia nhặt những lát thịt ba chỉ xông khói rơi trên váy, mắt chằm chằm nhìn Calcifer. Lão đang quật từ bên này sang bên kia lò sưởi. Những bộ mặt xanh lơ của lão gần như trắng bệch. Trong khoảnh khắc, lão có vô số những con mắt da cam, rồi khoảnh khắc sau đó đã có hàng dãy những con mắt bạc sáng như sao. Cô chưa bao giờ hình dung ra cái gì giống như thế.\r\nCó cái gì đó quét qua trên đầu với một phát nổ và tiếng đùng làm rung chuyển mọi thứ trong phòng. Một cái gì đó thứ hai theo sau, với tiếng rống dài chói tai. Calcifer rung lên gần như xanh đen, và da Sophie xèo xèo vì tàn lửa từ phép thần thông đó…”', 'Diana Wynne Jones', '20.5 x 13 cm', 'Bìa Mềm', 400),
(21, 68, 'Hiểu Về Trái Tim (Tái Bản 2023)', 50, 134300, '07.jpg', '1', 'Trong dòng chảy tất bật của cuộc sống, có bao giờ chúng ta dừng lại và tự hỏi: Tại sao ta giận? Tại sao ta buồn? Tại sao ta hạnh phúc? Tại sao ta cô đơn?... Tất cả những hiện tượng tâm lý ấy không ngừng biến hóa trong ta và tác động lên đời sống của ta, nhưng ta lại biết rất ít về nguồn gốc và sự vận hành của nó. Chỉ cần một cơn giận, hay một ý niệm nghi ngờ, cũng có thể quét sạch năng lượng bình yên trong ta và khiến ta nhìn mọi thứ đều sai lệch. Từ thất bại này đến đổ vỡ khác mà ta không lý giải nổi, chỉ biết dùng ý chí để tự nhắc nhở mình cố gắng tiến bộ hơn. Cho nên, hiểu về trái tim chính là nhu cầu căn bản nhất của con người.', 'Minh Niệm', '20.5 x 13 x 2.5 cm', 'Bìa Mềm', 479),
(3, 69, 'Dragon Ball Super - Tập 16: Chiến Binh Mạnh Nhất Vũ Trụ', 50, 20000, '08.jpg', '1', 'Granola là người hành tinh Cereal cuối cùng còn sống sau trận càn quét của Frieza và quân đội Saiya. Anh đã dùng ngọc rồng của hành tinh Cereal để thực hiện điều ước biến mình thành chiến binh mạnh nhất vũ trụ, trả thù cho quê hương. Trong khi đó, Goku và các bạn lại nhận được yêu cầu tiêu diệt Granola từ một nhóm người tên Heeter.', 'Akira Toriyama, Toyotarou', '	17.6 x 11.3 x 1.3 cm', 'Bìa Mềm', 192);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `categories`
--

CREATE TABLE `categories` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `categories`
--

INSERT INTO `categories` (`id`, `name`) VALUES
(1, 'Truyện trinh thám'),
(2, 'LightNovel'),
(3, 'Manga'),
(19, 'Tiểu Thuyết'),
(20, 'Sách Tiếng Việt'),
(21, 'Kỹ năng sống'),
(22, 'Kinh dị');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `customer`
--

CREATE TABLE `customer` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(11) NOT NULL,
  `address` varchar(100) NOT NULL,
  `phone` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `customer`
--

INSERT INTO `customer` (`id`, `name`, `email`, `password`, `address`, `phone`) VALUES
(1, 'Nguyễn Phúc Đức', 'duc@gmail.com', '1234', 'Hà Đông', 123456789),
(2, 'Nguyễn Phúc Nhật Thành', 'thanh@gmail.com', 'abc123', 'Hà Đông', 961581328),
(9, 'Phan Văn Thai', 'thai@gmail.com', 'S2wUnwTKYtz', 'Nam Định', 915006655),
(10, 'Tran Van A', 'a@gmail.com', '123', 'Nam Định', 915006655);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `detailed_invoice`
--

CREATE TABLE `detailed_invoice` (
  `amount` int(11) NOT NULL,
  `price` int(11) NOT NULL,
  `id_book` int(11) NOT NULL,
  `id_invoice` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `invoice`
--

CREATE TABLE `invoice` (
  `id` int(11) NOT NULL,
  `date_time` date NOT NULL,
  `status` varchar(50) NOT NULL,
  `id_ad` int(11) NOT NULL,
  `id_custumer` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Chỉ mục cho bảng `book`
--
ALTER TABLE `book`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_categories` (`id_categories`);

--
-- Chỉ mục cho bảng `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `detailed_invoice`
--
ALTER TABLE `detailed_invoice`
  ADD KEY `id_prdetailed` (`id_book`),
  ADD KEY `id_invoice` (`id_invoice`);

--
-- Chỉ mục cho bảng `invoice`
--
ALTER TABLE `invoice`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_ad` (`id_ad`),
  ADD KEY `id_custumer` (`id_custumer`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `admin`
--
ALTER TABLE `admin`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `book`
--
ALTER TABLE `book`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=70;

--
-- AUTO_INCREMENT cho bảng `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT cho bảng `customer`
--
ALTER TABLE `customer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT cho bảng `invoice`
--
ALTER TABLE `invoice`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `book`
--
ALTER TABLE `book`
  ADD CONSTRAINT `book_ibfk_1` FOREIGN KEY (`id_categories`) REFERENCES `categories` (`id`);

--
-- Các ràng buộc cho bảng `detailed_invoice`
--
ALTER TABLE `detailed_invoice`
  ADD CONSTRAINT `detailed_invoice_ibfk_3` FOREIGN KEY (`id_invoice`) REFERENCES `invoice` (`id`),
  ADD CONSTRAINT `detailed_invoice_ibfk_4` FOREIGN KEY (`id_book`) REFERENCES `book` (`id`);

--
-- Các ràng buộc cho bảng `invoice`
--
ALTER TABLE `invoice`
  ADD CONSTRAINT `invoice_ibfk_1` FOREIGN KEY (`id_ad`) REFERENCES `admin` (`id_admin`),
  ADD CONSTRAINT `invoice_ibfk_2` FOREIGN KEY (`id_ad`) REFERENCES `admin` (`id_admin`),
  ADD CONSTRAINT `invoice_ibfk_3` FOREIGN KEY (`id_custumer`) REFERENCES `customer` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
