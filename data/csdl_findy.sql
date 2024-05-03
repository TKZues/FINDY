-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th5 03, 2024 lúc 04:49 PM
-- Phiên bản máy phục vụ: 10.4.28-MariaDB
-- Phiên bản PHP: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `csdl_findy`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `account_tho`
--

CREATE TABLE `account_tho` (
  `id_tho` int(11) NOT NULL,
  `hoTen` varchar(225) NOT NULL,
  `gmail` varchar(255) NOT NULL,
  `matkhau` varchar(225) NOT NULL,
  `role` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `account_tho`
--

INSERT INTO `account_tho` (`id_tho`, `hoTen`, `gmail`, `matkhau`, `role`) VALUES
(81, 'Thanh Nam', 'thanhnam2000@gmail.com', '1234', 'nguoi_tho'),
(82, 'Nam Anh', 'namanh@gmail.com', '1234', 'nguoi_tho'),
(83, 'Thanh Hải', 'thanhhai2000@gmail.com', '1234', 'nguoi_tho'),
(84, 'Mai Anh', 'maianh1234@gmail.com', '1234', 'nguoi_tho'),
(85, 'Tuấn Huy', 'tuanhuy1999@gmail.com', '1234', 'nguoi_tho'),
(86, 'Ngọc Hải', 'ngochai1234@gmail.com', '1234', 'nguoi_tho'),
(87, 'Thợ', 'thanhthanh2000@gmail.com', '1234', 'nguoi_tho'),
(88, '', '', '', 'nguoi_tho'),
(89, '', '', '', 'nguoi_tho'),
(90, '', '', '', 'nguoi_tho'),
(91, '', '', '', 'nguoi_tho'),
(92, '', '', '', 'nguoi_tho'),
(93, '', '', '', 'nguoi_tho'),
(94, '', '', '', 'nguoi_tho'),
(95, '', '', '', 'nguoi_tho'),
(96, '', '', '', 'nguoi_tho'),
(97, '', '', '', 'nguoi_tho'),
(98, '', '', '', 'nguoi_tho'),
(99, '', '', '', 'nguoi_tho'),
(100, '', '', '', 'nguoi_tho'),
(101, '', '', '', 'nguoi_tho'),
(102, '', '', '', 'nguoi_tho'),
(103, '', '', '', 'nguoi_tho'),
(104, '', '', '', 'nguoi_tho'),
(105, '', '', '', 'nguoi_tho'),
(106, '', '', '', 'nguoi_tho'),
(107, '', '', '', 'nguoi_tho'),
(108, '', '', '', 'nguoi_tho'),
(109, '', '', '', 'nguoi_tho'),
(110, '', '', '', 'nguoi_tho'),
(111, '', '', '', 'nguoi_tho'),
(112, '', '', '', 'nguoi_tho'),
(113, '', '', '', 'nguoi_tho'),
(114, '', '', '', 'nguoi_tho'),
(115, '', '', '', 'nguoi_tho'),
(116, '', '', '', 'nguoi_tho'),
(117, '', '', '', 'nguoi_tho'),
(118, '', '', '', 'nguoi_tho'),
(119, '', '', '', 'nguoi_tho'),
(120, '', '', '', 'nguoi_tho'),
(121, '', '', '', 'nguoi_tho');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `account_thue`
--

CREATE TABLE `account_thue` (
  `id_thue` int(11) NOT NULL,
  `hoTen` varchar(225) NOT NULL,
  `gmail` varchar(255) NOT NULL,
  `matkhau` varchar(225) NOT NULL,
  `role` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `account_thue`
--

INSERT INTO `account_thue` (`id_thue`, `hoTen`, `gmail`, `matkhau`, `role`) VALUES
(85, '', '', '', 'nguoi_thue'),
(86, '', '', '', 'nguoi_thue'),
(87, '', '', '', 'nguoi_thue'),
(88, '', '', '', 'nguoi_thue'),
(89, '', '', '', 'nguoi_thue'),
(90, '', '', '', 'nguoi_thue'),
(91, '', '', '', 'nguoi_thue'),
(92, 'Thanh Khải', 'thanhkhai@gmail.com', '1234', 'nguoi_thue'),
(93, 'Minh Hải', 'minhhai@gmail.com', '1234', 'nguoi_thue'),
(94, 'Phạm Thanh', 'phamthanh@gmail.com', '1234', 'nguoi_thue'),
(95, 'Nguyễn Thanh Thảo', 'thanhthao@gmail.com', '1234', 'nguoi_thue'),
(96, 'Nhã Nam', 'nhanam@gmail.com', '1234', 'nguoi_thue'),
(97, 'Thanh Ngọc', 'thanhngoc1234@gmail.com', '1234', 'nguoi_thue'),
(98, 'Khánh Hằng', 'khanhhang1234@gmail.com', '1234', 'nguoi_thue'),
(99, 'Khách Thuê', 'tuantuan@gmail.com', '1234', 'nguoi_thue'),
(100, '', '', '', 'nguoi_thue'),
(101, '', '', '', 'nguoi_thue'),
(102, '', '', '', 'nguoi_thue'),
(103, '', '', '', 'nguoi_thue'),
(104, '', '', '', 'nguoi_thue'),
(105, '', '', '', 'nguoi_thue'),
(106, '', '', '', 'nguoi_thue'),
(107, '', '', '', 'nguoi_thue'),
(108, '', '', '', 'nguoi_thue'),
(109, '', '', '', 'nguoi_thue'),
(110, '', '', '', 'nguoi_thue'),
(111, '', '', '', 'nguoi_thue'),
(112, '', '', '', 'nguoi_thue'),
(113, '', '', '', 'nguoi_thue'),
(114, '', '', '', 'nguoi_thue'),
(115, '', '', '', 'nguoi_thue'),
(116, '', '', '', 'nguoi_thue'),
(117, '', '', '', 'nguoi_thue'),
(118, '', '', '', 'nguoi_thue'),
(119, '', '', '', 'nguoi_thue'),
(120, '', '', '', 'nguoi_thue'),
(121, '', '', '', 'nguoi_thue'),
(122, '', '', '', 'nguoi_thue'),
(123, '', '', '', 'nguoi_thue'),
(124, '', '', '', 'nguoi_thue'),
(125, '', '', '', 'nguoi_thue');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `baocaochoadmin`
--

CREATE TABLE `baocaochoadmin` (
  `mabaocao` int(11) NOT NULL,
  `mathongtintho` int(11) NOT NULL,
  `ma_posttimtho` int(11) NOT NULL,
  `reason` text NOT NULL,
  `drive` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `baocaochoadmin`
--

INSERT INTO `baocaochoadmin` (`mabaocao`, `mathongtintho`, `ma_posttimtho`, `reason`, `drive`) VALUES
(1, 43, 33, 'Ảnh xâm phạm quyền tác giả', '3');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `comment`
--

CREATE TABLE `comment` (
  `comment_id` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `post_id` int(11) DEFAULT NULL,
  `cmt_content` text DEFAULT NULL,
  `comment_date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `like`
--

CREATE TABLE `like` (
  `like_id` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `post_id` int(11) DEFAULT NULL,
  `like_date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `phanhoitunguoidung`
--

CREATE TABLE `phanhoitunguoidung` (
  `maphanhoitunguoidung` int(11) NOT NULL,
  `mathongtinthue` int(11) NOT NULL,
  `phanhoi` text NOT NULL,
  `thoigian` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `post`
--

CREATE TABLE `post` (
  `post_id` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `image` varchar(500) DEFAULT NULL,
  `post_title` varchar(100) NOT NULL,
  `content` text DEFAULT NULL,
  `post_date` timestamp NOT NULL DEFAULT current_timestamp(),
  `likes` int(11) DEFAULT 0,
  `comments` int(11) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `post`
--

INSERT INTO `post` (`post_id`, `user_id`, `image`, `post_title`, `content`, `post_date`, `likes`, `comments`) VALUES
(18, 81, 'pexels-christian-heitz-842711.jpg', 'Về quê không khí mát mẻ hẳn', '\r\nQuê hương của tôi là một miền đất yên bình, nằm giữa những ngọn đồi xanh mướt và những cánh rừng rợp cây. Mỗi buổi sáng, khi bình minh len lỏi qua những đỉnh núi, làn sương mỏng mơ bắt đầu trải dài, tạo nên một không gian huyền bí và dễ chịu.\r\n\r\nKhông khí ở quê hương tôi là sự hòa quyện tuyệt vời giữa mùi cây cỏ, hoa lá và đất đỏ mịn màng. Những cơn gió nhẹ làm lay động những cành cây, tạo ra tiếng rì rào nhẹ nhàng, như là một bản tình ca của tự nhiên. Mùi hương của lá thông và cây hoa hồng kết hợp với hương thơm của đất đỏ tạo nên một hương vị tự nhiên đặc trưng, làm cho không khí trở nên tinh khiết và mát mẻ.', '2024-01-02 04:18:04', 0, 0),
(20, 81, 'pexels-lê-minh-3634770.jpg', 'Ở một nơi rất xa', '\r\nỞ một nơi rất xa, nơi mà ánh sáng mặt trời khám phá ra những góc tối cuối cùng của thế giới, là nơi mà đất trời hòa mình vào nhau và biên giới của hiện tại và quá khứ trở nên mờ nhạt. Nơi này không thuộc về một quốc gia cụ thể, nhưng là một tinh cảnh toàn cầu, nơi mà thời gian trôi chậm và tận hưởng trở thành một nghệ thuật.\r\n\r\nDưới bức tranh lụa trời rộng lớn, có những ngọn núi cao vút lên như những ngón tay chạm tới chính bầu trời. Những đỉnh núi phủ đầy tuyết trắng mịn, tạo nên một bức tranh huyền bí mà mắt con người khó lòng cưỡng lại. Ánh nắng mặt trời mềm mại lướt nhẹ qua những đỉnh núi, tô điểm cho bức tranh tự nhiên như một tác phẩm nghệ thuật tinh tế.', '2024-01-02 04:19:02', 0, 0),
(21, 82, 'pexels-ninh-tiến-đạt-18151172.jpg', 'Đây là chuyển đi Đà Lạt', 'Chuyến đi Đà Lạt là hành trình huyền bí, nơi tôi được chìm đắm trong không khí tươi mới của núi rừng, đồng thời trải nghiệm sự bình yên và hòa mình vào vẻ đẹp độc đáo của thành phố ngàn hoa.\r\n\r\nKhi bước chân đầu tiên xuống Đà Lạt, tôi ngay lập tức bị quyến rũ bởi hương sắc của hoa. Những con đường hẹp nhỏ, ven cạnh đồng cỏ xanh ngắt, dẫn dắt tôi đến những vườn hoa tuyệt vời. Hoa đào, hồng, lavender và nhiều loại hoa khác tô điểm cho thành phố như một bức tranh tinh tế.', '2024-01-02 04:25:52', 0, 0),
(22, 82, 'pexels-min-an-758898.jpg', 'Bộ ảnh cưới của đôi vợ chồng', 'Trong bức ảnh này, đôi vợ chồng đứng tại nơi họ gặp nhau lần đầu, có thể là một công viên, quán cà phê hoặc địa điểm đặc biệt đánh dấu bắt đầu câu chuyện tình yêu của họ. Ánh sáng vàng óng ánh của bức tường cổ kính phản chiếu trên khuôn mặt hạnh phúc của họ, tạo nên không gian ngập tràn cảm xúc và kỷ niệm.', '2024-01-02 04:26:18', 0, 0),
(23, 83, 'pexels-tiago-cardoso-2402995.jpg', 'Đi Tây Bắc với mình nha', 'Chuyến hành trình Tây Bắc bắt đầu từ Hà Nội, một buổi sáng trong lành, bắt đầu bằng những cung đường quen thuộc nhưng hứa hẹn mang đến những trải nghiệm mới mẻ và phong cảnh hùng vĩ.', '2024-01-02 04:40:39', 0, 0),
(24, 83, 'pexels-cottonbro-studio-3149896.jpg', 'Chụp bộ ảnh Giáng Sinh cho khách quen', 'Bộ ảnh Giáng Sinh ấm áp và tràn ngập không khí lễ hội đã được tạo ra đặc biệt cho khách quen thân thiết của chúng tôi. Được chụp bởi những nhiếp ảnh gia tài năng, bức tranh hòa mình trong không khí tràn ngập sự ấm áp và hạnh phúc của mùa lễ Giáng Sinh.', '2024-01-02 04:41:02', 0, 0),
(25, 84, 'post1.jpg', 'Ảnh phong cách cổ điển', 'Bức tranh đẹp khôn nguôi bắt đầu hiện lên trong bức ảnh phong cách cổ điển của chúng ta, như một cánh cửa mở ra thế giới ngập tràn hồn nhiên và lãng mạn. Ánh sáng ấm áp từ bóng đèn cổ điển rơi rực rỡ trên một căn phòng trang trí lụa và rèm cổ điển, tạo nên bầu không khí quyến rũ và bí ẩn.\r\n\r\nKhung cảnh chính của bức ảnh là một bàn ăn được bày trí một cách tinh tế với nền nã và đồ trang trí vintage. Nền nhà cổ điển làm tăng thêm vẻ sang trọng, trong khi những chiếc đĩa và đồ dùng lụa lạ mắt nổi bật trên bàn. Bức tranh hiện ra như một bức tranh cổ điển, nơi thời gian dường như đã dừng lại.', '2024-01-02 04:47:58', 0, 0),
(26, 84, 'post2.jpg', 'Cửa hàng đồ hiệu', 'Bức tranh của cửa hàng đồ hiệu được vẽ nên bằng từng nét đẹp tinh tế và sang trọng. Bức ảnh mở đầu với cảnh quay bên ngoài cửa hàng, nơi mà sự sang trọng được thể hiện từ chiếc biển hiệu lớn và đèn trang trí bắt mắt. Khung cửa sổ cổ điển, được trang trí bằng hoa và kính cường lực, tạo nên một bức tranh tuyệt vời của phong cách và đẳng cấp.', '2024-01-02 04:49:05', 0, 0),
(27, 85, 'post3.jpg', 'Một món ăn thật ngon', '\r\nTôi là một nhiếp ảnh gia ẩm thực, đam mê việc chụp hình để tạo ra những hình ảnh gợi cảm nhận về hương vị, mùi vị và nghệ thuật trong thế giới ẩm thực. Tôi xem mỗi bức ảnh như một tác phẩm nghệ thuật, nơi tôi có thể kể một câu chuyện về đồ ăn và làm cho người xem muốn trải nghiệm mỗi món ăn.\r\n\r\nKhả năng làm việc với ánh sáng, màu sắc và góc nhìn là những điểm mạnh của tôi. Tôi luôn cố gắng tạo ra những bức ảnh sống động và hấp dẫn, với sự chú ý đặc biệt đến chi tiết nhỏ và sự độc đáo của mỗi món ăn. Tôi tin rằng việc tận dụng ánh sáng tự nhiên và sử dụng các phương tiện kỹ thuật nhiếp ảnh sẽ tạo ra những hình ảnh ẩm thực tuyệt vời nhất.', '2024-01-02 04:52:12', 0, 0),
(28, 85, 'post4.jpg', 'Ngon!!!! Món ăn nay thật tuyệt', 'Rất vui khi bạn thích bức tranh về món ăn! Nếu bạn muốn biết thêm chi tiết về công thức hoặc muốn tìm hiểu về các món ăn khác, đừng ngần ngại hỏi thêm. Chúc bạn có những trải nghiệm ẩm thực thú vị và ngon miệng!', '2024-01-02 04:52:51', 0, 0),
(29, 86, 'post5.jpg', 'Một sự kiện thật là lớn', '\r\nSự kiện lớn như một bức tranh tuyệt vời, mở ra với cảm giác hứng khởi và phấn khích. Ánh đèn sáng rực rỡ và bức tranh của sự kiện nở rộ từ trung tâm, tạo nên một không khí phấn khích và tràn ngập năng lượng tích cực.', '2024-01-02 04:55:15', 0, 0),
(30, 86, 'post6.jpg', 'Một chiếc ảnh thật dễ thương', '\r\nBức tranh về một chiếc ảnh dễ thương nổi bật với sự ấm áp và ngọt ngào. Bức ảnh mở ra với hình ảnh của một chủ đề đáng yêu, có thể là một đứa trẻ, một con thú cưng, hoặc thậm chí là một cảnh tình nhân lãng mạn.', '2024-01-02 04:55:47', 0, 0),
(31, 87, 'post7.jpg', 'các bạn ấy đã lớn rồi ', 'Bức tranh về sự lớn lên thường bắt đầu bằng hình ảnh của những người bạn, gia đình hoặc đồng đội đã trưởng thành và phát triển. Bức tranh mở ra với cảm giác của sự thay đổi và sự phát triển, thể hiện qua nụ cười chín chắn và ánh mắt tự tin.\r\n\r\nKhung cảnh chuyển đến những hoạt động hoặc cảnh vật mô tả cuộc sống hiện tại của họ, có thể là công việc, học tập, hoặc những niềm vui và đam mê mới mẻ. Các bạn ấy có thể đang thực hiện những bước quan trọng trong sự nghiệp hoặc đang chấp nhận những trách nhiệm mới.', '2024-01-02 04:58:03', 0, 0),
(32, 87, 'post8.jpg', 'Vậy là sắp đến tết rồi', '\r\nBức tranh về sắp đến Tết thường bắt đầu bằng hình ảnh của không khí sôi động và náo nhiệt khi Tết đang đến gần. Ánh đèn đẹp lung linh và trang trí tinh tế nổi bật trên các con phố, tạo nên một bức tranh ấm áp và tràn ngập không khí lễ hội.\r\n\r\nBức ảnh có thể mở ra với hình ảnh của gia đình hoặc bạn bè đang cùng nhau chuẩn bị cho Tết. Mọi người cùng nhau trang trí cây đào, treo đèn lồng và nấu những món ăn truyền thống để chào đón năm mới.', '2024-01-02 04:58:38', 0, 0);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `post_timtho`
--

CREATE TABLE `post_timtho` (
  `ma_posttimtho` int(11) NOT NULL,
  `mathongtinthue` int(11) NOT NULL,
  `tenposttimtho` varchar(225) NOT NULL,
  `diadiem` varchar(225) NOT NULL,
  `thoigian` varchar(225) NOT NULL,
  `gia` varchar(225) NOT NULL,
  `sukien` varchar(225) NOT NULL,
  `phongcach` varchar(225) NOT NULL,
  `anhmau` varchar(225) NOT NULL,
  `motachitiet` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `post_timtho`
--

INSERT INTO `post_timtho` (`ma_posttimtho`, `mathongtinthue`, `tenposttimtho`, `diadiem`, `thoigian`, `gia`, `sukien`, `phongcach`, `anhmau`, `motachitiet`) VALUES
(33, 34, 'Chụp ảnh kỷ niệm gia đình', '02-04 Đường số 9, Khu đô thị Him Lam, Quận 7, Thành phố Hồ Chí Minh', '2024-01-09', '1000000 - 2000000', 'Không', 'Hạnh phúc', 'concept-2-3.png', 'Chúng tôi đang tìm kiếm một nhiếp ảnh gia tài năng, đam mê và sáng tạo để ghi lại những khoảnh khắc quý giá trong cuộc sống gia đình chúng tôi. Nếu bạn là người đam mê nhiếp ảnh và muốn tham gia vào hành trình ghi lại những khoảnh khắc đáng nhớ của chúng tôi, hãy đọc tiếp!\r\n\r\nChúng Tôi Cần:📷 Nhiếp ảnh gia có kinh nghiệm, đam mê và tâm huyết với nghệ thuật chụp ảnh gia đình.📷 Sự linh hoạt và sáng tạo trong việc tạo ra những bức ảnh độc đáo và chân thực.📷 Hiểu biết về ánh sáng, góc chụp và khả năng làm việc với các thành viên trong gia đình.\r\n\r\nCông Việc Cụ Thể:📸 Chụp ảnh gia đình trong môi trường tự nhiên và thoải mái'),
(34, 35, 'Chụp ảnh cưới: Hành trình hạnh phúc', '0 Long Thuận, Long Phước, Quận 9, Thành phố Hồ Chí Minh, Việt Nam', '2024-01-04', '2000000 - 3000000', 'Cưới', 'Trưởng thành', 'ac1.webp', 'Tôi hiện đang trong quá trình chuẩn bị cho ngày cưới của mình, một sự kiện quan trọng và ý nghĩa trong cuộc đời. Để làm cho khoảnh khắc này trở nên đặc biệt hơn và lưu giữ những kỷ niệm đẹp nhất, tôi đang tìm kiếm một nhiếp ảnh gia tài năng và sáng tạo.\r\n\r\nVề Sự Kiện:\r\nNgày cưới của chúng tôi sẽ diễn ra vào 28/12/2023 tại Quận 9 và dự kiến sẽ là một sự kiện tràn ngập tình yêu và hạnh phúc. Chúng tôi mong muốn có được bức tranh chân thực về những khoảnh khắc tuyệt vời nhất trong ngày quan trọng này'),
(35, 36, 'Chụp nghệ thuật ẩm thực', 'Vinhomes Central Park, phường 22, quận Bình Thạnh, TP. Hồ Chí Minh', '2024-02-08', '1000000 - 2000000', 'Không', 'Ẩm thực', 'download (5).jpg', 'Tôi hiện tại tôi đang tìm kiếm một nhiếp ảnh gia tài năng và đầy sáng tạo để hợp tác trong dự án chụp ảnh nghệ thuật ẩm thực độc đáo của tôi.\r\n\r\nMục Tiêu Dự Án:\r\nDự án này nhằm mục đích chụp những bức ảnh nghệ thuật độc đáo về ẩm thực, không chỉ là việc ghi lại món ăn mà còn là cách thức sáng tạo để thể hiện nghệ thuật và văn hóa trong ẩm thực.'),
(36, 37, 'Chụp ảnh liên quan đến Việt phục', 'Phường 28, Bình Thạnh, Thành phố Hồ Chí Minh', '5h 12/02/2002', '2000000 - 3000000', 'Không', 'Trẻ trung', '', 'Ảnh chụp màn hình 2023-12-01 235012.png\', \'Tôi đang tìm kiếm một nhiếp ảnh gia đầy sáng tạo và tài năng để hợp tác trong dự án chụp ảnh ngoại trời đa dạng của tôi.\\r\\n\\r\\nMục Tiêu Dự Án:\\r\\nDự án này tập trung vào việc chụp những bức ảnh ngoại trời đẹp mắt, từ cảnh đẹp tự nhiên đến chân dung và hoạt động ngoại ô. Mục tiêu là tạo ra những hình ảnh sống động và tinh tế, nắm bắt vẻ đẹp độc đáo của môi trường tự nhiên và hoạt động con người'),
(37, 38, 'Chụp ảnh chân dung nghệ thuật', 'Quang Trung, Phường 11, Gò Vấp, Thành phố Hồ Chí Minh', '2024-01-05', '4000000 - 5000000', 'Không', 'Trẻ trung', 'collection-5-2.png', 'Tôi đang tìm kiếm một nhiếp ảnh gia tài năng và đầy sáng tạo để hợp tác trong dự án chụp ảnh chân dung nghệ thuật của tôi.\r\n\r\nMục Tiêu Dự Án:\r\nDự án này nhằm mục đích tạo ra những bức ảnh chân dung độc đáo và nghệ thuật, không chỉ là bức tranh về khuôn mặt mà còn là cách thức sáng tạo để thể hiện tính cách và cá nhân của từng người mô hình'),
(38, 39, 'Ánh Sáng và Bóng Đen', '02-04, Đường số 9, KDC Himlam, Phường Tân Hưng, Quận 7, TP HCM', '2024-01-16', '6000000 - 7000000', 'Không', 'Bí ẩn', 'Nothing less than perfect.jpg', 'Một buổi chụp nghệ thuật tập trung vào việc tạo ra các bức ảnh nổi bật bằng cách sử dụng ánh sáng và bóng đen. Tập trung vào sự tương phản và chi tiết tối ưu để tạo ra những hình ảnh động và mạnh mẽ'),
(39, 40, 'Tìm Nhiếp Ảnh Gia Cho Buổi Chụp Hình Cưới', '02-04, Đường số 9, KDC Himlam, Phường Tân Hưng, Quận 7, TP HC', '2024-02-01', '13000000 - 14000000', 'Cưới', 'Hạnh phúc', 'ac2.webp', 'Chúng tôi, Khánh Hằng Minh Thanh, đang chuẩn bị bước vào hành trình hạnh phúc của cuộc đời mình và đang tìm kiếm một nhiếp ảnh gia tài năng để ghi lại những khoảnh khắc đẹp nhất của ngày cưới.\r\n\r\nChúng tôi muốn một buổi chụp hình ấn tượng và tình cảm, nơi mà từng bức ảnh không chỉ là hình ảnh, mà còn là câu chuyện của chúng tôi. Chúng tôi tin rằng nhiếp ảnh có thể làm nổi bật những cung bậc cảm xúc, từ niềm vui tới hạnh phúc và tình yêu.'),
(40, 41, 'Chụp hình kỉ yếu dành cho sinh viên', '02-04, Đường số 9, KDC Himlam, Phường Tân Hưng, Quận 7, TP HCM', '2024-01-10', '2000000 - 5000000', 'Không', 'Thanh xuân', 'collection-7-1.png', 'hiện đang tìm kiếm một nhiếp ảnh gia tài năng và sáng tạo để ghi lại những khoảnh khắc đẹp nhất trong cuộc sống sinh viên. Buổi chụp hình sẽ diễn ra vào ngày [ngày] tại [địa điểm], và chúng tôi tin rằng bạn có thể là người đưa ra góc nhìn độc đáo và tinh tế nhất cho sự kiện này');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `post_tructiep`
--

CREATE TABLE `post_tructiep` (
  `ma_posttructiep` int(11) NOT NULL,
  `mathongtinthue` int(11) NOT NULL,
  `ma_profile` int(11) NOT NULL,
  `tenposttimtho` varchar(225) NOT NULL,
  `diadiem` varchar(225) NOT NULL,
  `thoigian` varchar(225) NOT NULL,
  `gia` int(11) NOT NULL,
  `sukien` varchar(225) NOT NULL,
  `phongcach` varchar(225) NOT NULL,
  `anhmau` varchar(225) NOT NULL,
  `motachitiet` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `post_tructiep`
--

INSERT INTO `post_tructiep` (`ma_posttructiep`, `mathongtinthue`, `ma_profile`, `tenposttimtho`, `diadiem`, `thoigian`, `gia`, `sukien`, `phongcach`, `anhmau`, `motachitiet`) VALUES
(6, 38, 41, 'Chụp ảnh kỷ yếu', 'Trường tài chính marketing', '4h 12/4/2024', 2000000, 'Không', 'Trẻ trung', '[value-10]', 'Chụp cho em bộ ảnh cấp 3 để trước khi ra trường chún tm có một kỉ niệm thật là đẹp');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `profile`
--

CREATE TABLE `profile` (
  `ma_profile` int(11) NOT NULL,
  `mathongtintho` int(11) NOT NULL,
  `ten` varchar(225) NOT NULL,
  `nghenghiep` varchar(225) NOT NULL,
  `sdt` varchar(11) NOT NULL,
  `email` varchar(225) NOT NULL,
  `diachi` varchar(225) NOT NULL,
  `gioithieu` text NOT NULL,
  `img1` varchar(225) NOT NULL,
  `img2` varchar(225) NOT NULL,
  `img3` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `profile`
--

INSERT INTO `profile` (`ma_profile`, `mathongtintho`, `ten`, `nghenghiep`, `sdt`, `email`, `diachi`, `gioithieu`, `img1`, `img2`, `img3`) VALUES
(20, 43, 'Ngô Thanh Nam', 'Nhiếp ảnh gia chân dung', '03586757849', 'thanhnam2000@gmail.com', 'Quận 2, TP.HCM', 'Là một nhiếp ảnh gia chân dung, cuộc sống của tôi xoay quanh việc bắt chước những khoảnh khắc đẹp nhất của con người và ghi lại những biểu cảm tinh tế nhất trên khuôn mặt họ. Nhiệm vụ của tôi không chỉ là chụp hình, mà còn là tạo ra những tác phẩm nghệ thuật sống động, nói lên câu chuyện riêng biệt của mỗi người.  Mỗi buổi chụp hình là một cuộc phiêu lưu tìm kiếm vẻ đẹp độc đáo trong từng cá nhân. Trước khi nhấn nút máy ảnh, tôi thường tận hưởng thời gian để tìm hiểu về người mẫu, hiểu rõ về đặc điểm văn hóa, tính cách và cảm xúc của họ. Điều này giúp tôi tạo ra những bức ảnh chân dung không chỉ đơn thuần là hình ảnh, mà còn là biểu tượng của cái \"tôi\" đặc biệt của mỗi người.  Khi tôi đang chụp, tôi thường xuyên tìm kiếm ánh sáng hoàn hảo để làm nổi bật đường nét và diễn đạt sâu sắc những chi tiết trên khuôn mặt. Tôi cố gắng tạo ra không khí thoải mái và tự nhiên để người mẫu có thể thể hiện chính bản thân mình.  Sự tập trung vào từng chi tiết nhỏ, từ ánh sáng đến góc chụp, là chìa khóa để tạo ra bức tranh chân dung tuyệt vời. Sau mỗi buổi chụp, tôi thường xem xét và chỉnh sửa để đảm bảo rằng mỗi bức ảnh không chỉ đáp ứng kỳ vọng mà còn vượt xa mong đợi, tạo ra một tác phẩm nghệ thuật sống động và sâu sắc.', 'cd1.jpg', 'cd2.jpg', 'cd3.jpg'),
(31, 44, 'Phạm Nam Anh', 'Nhiếp ảnh gia cưới', '03577648395', 'namanh@gmail.com', 'Quận 1, TPHCM', ' Tôi là một nhiếp ảnh gia cưới với đam mê và tình yêu sâu sắc đối với nghệ thuật nhiếp ảnh. Tôi tận hưởng việc ghi lại những khoảnh khắc đẹp nhất trong cuộc sống của các cặp đôi, tạo ra những bức ảnh kỷ niệm vĩnh cửu cho họ.  Với nhiều năm kinh nghiệm trong lĩnh vực này, tôi đã phát triển kỹ năng chuyên nghiệp để nắm bắt tất cả những khoảnh khắc tự nhiên và ý nghĩa. Tôi không chỉ chú trọng vào việc chụp những bức ảnh đẹp mắt mà còn tạo ra không khí thoải mái và vui vẻ trong mỗi buổi chụp.', 'ac1.jpg', 'ac2.jpg', 'ac3.jpg'),
(32, 45, 'Nguyễn Thanh Hải', 'Nhiếp ảnh gia quảng cáo', '0357768493', 'thanhhai2000@gmail.com', 'Quận 9, TPHCM', 'Tôi là một nhiếp ảnh gia quảng cáo, đặt sứ mệnh của mình vào việc chuyển đổi ý tưởng sáng tạo thành hình ảnh mạnh mẽ và ấn tượng. Với kinh nghiệm lâu dài trong lĩnh vực này, tôi tự hào về khả năng sáng tạo, sự chuyên nghiệp và khả năng tận dụng ánh sáng, màu sắc, và góc nhìn để tạo ra những tác phẩm nổi bật.  Tôi tập trung vào việc hiểu rõ về sản phẩm hoặc dịch vụ cần quảng cáo, và từ đó, xây dựng các ý tưởng hình ảnh sáng tạo và hiệu quả. Tôi có khả năng làm việc chặt chẽ với đội ngũ sáng tạo, nhằm đảm bảo rằng mỗi bức ảnh không chỉ đẹp mắt mà còn phản ánh đúng bản chất và giá trị của thương hiệu.', 'qc1.jpg', 'qc2.jpg', 'qc3.jpg'),
(33, 46, 'Phạm Mai Anh', 'Nhiếp ảnh gia thời trang ', '0357786940', 'maianh1234@gmail.com', 'Tăng nhơn phú', 'Tôi là một nhiếp ảnh gia thời trang, đam mê sự sáng tạo và nghệ thuật trong việc ghi lại những xu hướng và cái đẹp của ngành công nghiệp thời trang. Tôi không chỉ là người chụp hình, mà còn là người sáng tạo, đưa ra góc nhìn mới và cái nhìn độc đáo về thế giới thời trang.  Với sự nhạy bén với thời trang và gu thẩm mỹ phong cách, tôi tập trung vào việc tái tạo không gian và thời trang, tạo ra những bức ảnh tuyệt vời với sự kết hợp hoàn hảo giữa ánh sáng, màu sắc, và động tác. Tôi luôn tìm kiếm cái đẹp độc đáo trong từng chi tiết, từ trang phục đến phụ kiện và ngữ cảnh.', 'tt1.jpg', 'tt2.jpg', 'tt3.jpg'),
(36, 47, 'Ngô Tuấn Huy', 'Nhiếp ảnh gia ẩm thực ', '0357465839', 'tuanhuy1999@gmail.com', 'Quận 12, TPHCM', ' Tôi là một nhiếp ảnh gia ẩm thực, đam mê việc chụp hình để tạo ra những hình ảnh gợi cảm nhận về hương vị, mùi vị và nghệ thuật trong thế giới ẩm thực. Tôi xem mỗi bức ảnh như một tác phẩm nghệ thuật, nơi tôi có thể kể một câu chuyện về đồ ăn và làm cho người xem muốn trải nghiệm mỗi món ăn.  Khả năng làm việc với ánh sáng, màu sắc và góc nhìn là những điểm mạnh của tôi. Tôi luôn cố gắng tạo ra những bức ảnh sống động và hấp dẫn, với sự chú ý đặc biệt đến chi tiết nhỏ và sự độc đáo của mỗi món ăn. Tôi tin rằng việc tận dụng ánh sáng tự nhiên và sử dụng các phương tiện kỹ thuật nhiếp ảnh sẽ tạo ra những hình ảnh ẩm thực tuyệt vời nhất.', 'at1.jpg', 'at2.jpg', 'at3.jpg'),
(40, 48, 'Phạm Ngọc Hải', 'Nhiếp ảnh gia sự kiện', '0358475869', 'ngochai1234@gmail.com', 'Phú Nhuận', ' Tôi là một nhiếp ảnh gia sự kiện với sự đam mê và kỹ năng để ghi lại những khoảnh khắc đặc biệt trong cuộc sống. Công việc của tôi không chỉ là chụp ảnh mà còn là tạo ra những kí ức không thể quên cho khách hàng.  Với kinh nghiệm lâu dài trong lĩnh vực này, tôi đã phát triển khả năng quan sát và nắm bắt những chi tiết nhỏ nhất trong mỗi sự kiện. Tôi luôn cố gắng tạo ra không gian thoải mái để ghi lại những cảm xúc, niềm vui và kí ức đặc biệt của mọi người.', 'sk1.jpg', 'sk2.jpg', 'sk3.jpg'),
(41, 49, 'Nguyễn Thanh Thanh', 'Nhiếp ảnh gia chân dung học đường', '0358869453', 'thanhthanh2000@gmail.com', 'Gò Vấp', 'Tôi là một nhiếp ảnh gia chân dung học đường, chuyên tạo ra những bức ảnh cá nhân và đẹp mắt để ghi lại những khoảnh khắc quan trọng trong thời sinh viên. Với đam mê với nghệ thuật và sự sáng tạo, tôi nỗ lực để tạo ra những bức ảnh chân dung nổi bật và ý nghĩa.  Tôi tận dụng ánh sáng và môi trường để tạo ra không gian ảnh đẹp và độc đáo. Tôi luôn chú trọng đến việc tạo ra môi trường thoải mái và giao tiếp tích cực với người chụp hình, giúp họ thoải mái và tự tin để bắt lấy tinh thần và cái đẹp tự nhiên.', 'hd1.jpg', 'hd2.jpg', 'hd3.jpg');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `quanlybaidang`
--

CREATE TABLE `quanlybaidang` (
  `ma_quanlybaidang` int(11) NOT NULL,
  `ma_thongtintho` int(11) NOT NULL,
  `ma_posttimtho` int(11) NOT NULL,
  `giatri` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `quanlybaidang`
--

INSERT INTO `quanlybaidang` (`ma_quanlybaidang`, `ma_thongtintho`, `ma_posttimtho`, `giatri`) VALUES
(130, 43, 34, 0),
(131, 43, 37, 0),
(132, 43, 38, 0),
(136, 44, 39, 0),
(137, 44, 35, 0),
(139, 45, 37, 0),
(140, 45, 36, 0),
(141, 46, 34, 0),
(142, 46, 37, 0),
(143, 46, 38, 0),
(144, 47, 38, 0),
(145, 47, 37, 0),
(146, 47, 33, 0),
(147, 48, 36, 0),
(148, 48, 39, 0),
(150, 49, 37, 0),
(151, 49, 36, 0),
(171, 49, 33, 345345345),
(186, 49, 40, 2000000);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `quanlyyeucau`
--

CREATE TABLE `quanlyyeucau` (
  `ma_quanlyyeucau` int(11) NOT NULL,
  `ma_profile` int(11) NOT NULL,
  `mathongtinthue` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `sanpham`
--

CREATE TABLE `sanpham` (
  `masanpham` int(11) NOT NULL,
  `mathogiaosanpham` int(11) NOT NULL,
  `mathongtinthue` int(11) NOT NULL,
  `drive` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `sanphamtt`
--

CREATE TABLE `sanphamtt` (
  `masanphamtt` int(11) NOT NULL,
  `mathogiaosanphamtt` int(11) NOT NULL,
  `mathongtinthue` int(11) NOT NULL,
  `drive` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tacpham`
--

CREATE TABLE `tacpham` (
  `matacpham` int(11) NOT NULL,
  `mathongtintho` int(11) NOT NULL,
  `tentacpham` varchar(255) NOT NULL,
  `img1` varchar(225) NOT NULL,
  `img2` varchar(225) NOT NULL,
  `img3` varchar(225) NOT NULL,
  `img4` varchar(225) NOT NULL,
  `khoanggia` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `thanhtoan`
--

CREATE TABLE `thanhtoan` (
  `mathanhtoan` int(11) NOT NULL,
  `ma_posttimtho` int(11) NOT NULL,
  `mathongtintho` int(11) NOT NULL,
  `drive` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `thanhtoan`
--

INSERT INTO `thanhtoan` (`mathanhtoan`, `ma_posttimtho`, `mathongtintho`, `drive`) VALUES
(25, 40, 49, 'https://drive.google.com/drive/folders/1qdQDHywtlxF6OEDlnnRCvIsu-jtRyMDl');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `thochochinhsua`
--

CREATE TABLE `thochochinhsua` (
  `mathochochinhsua` int(11) NOT NULL,
  `ma_posttimtho` int(11) NOT NULL,
  `mathongtintho` int(11) NOT NULL,
  `drive` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `thongtindanhgia`
--

CREATE TABLE `thongtindanhgia` (
  `madanhgia` int(11) NOT NULL,
  `mathongtinthue` int(11) NOT NULL,
  `mathongtintho` int(11) NOT NULL,
  `rating` int(225) NOT NULL,
  `mota` text NOT NULL,
  `hinhdanhgia` varchar(225) NOT NULL,
  `videodanhgia` varchar(225) NOT NULL,
  `thoigian` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `thongtintho`
--

CREATE TABLE `thongtintho` (
  `mathongtintho` int(11) NOT NULL,
  `id_tho` int(11) NOT NULL,
  `hinhanhtho` varchar(225) NOT NULL,
  `diachi` varchar(225) NOT NULL,
  `ngaysinh` varchar(225) NOT NULL,
  `cccd` varchar(225) NOT NULL,
  `gioitinh` varchar(225) NOT NULL,
  `sdt` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `thongtintho`
--

INSERT INTO `thongtintho` (`mathongtintho`, `id_tho`, `hinhanhtho`, `diachi`, `ngaysinh`, `cccd`, `gioitinh`, `sdt`) VALUES
(43, 81, 'avatar-1.png', 'Quận 2, TP.HCM', '1997-06-11', '3453478765', 'Nam', '03586757849'),
(44, 82, 'avatar-3.png', 'Quận 1, TPHCM', '1996-06-06', '3453798656', 'Nam', '03577648395'),
(45, 83, 'avatar4.jpg', 'Quận 9, TPHCM', '1998-06-10', '3435478987', 'Nam', '0357768493'),
(46, 84, 'avatar2.jpg', 'Tăng nhơn phú', '2002-08-12', '4368978676', 'Nam', '0357786940'),
(47, 85, 'avatar-4.png', 'Quận 12, TPHCM', '2002-03-13', '3445643453', 'Nam', '0357465839'),
(48, 86, 'avatar6.jpg', 'Phú Nhuận', '2003-02-05', '3788765674', 'Nam', '0358475869'),
(49, 87, 'avatar3.jpg', 'Gò Vấp', '2005-07-13', '3849586954', 'Nam', '0358869453');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `thongtinthue`
--

CREATE TABLE `thongtinthue` (
  `mathongtinthue` int(11) NOT NULL,
  `id_thue` int(11) NOT NULL,
  `hinhanhthue` varchar(225) NOT NULL,
  `diachi` varchar(225) NOT NULL,
  `ngaysinh` varchar(225) NOT NULL,
  `cccd` varchar(225) NOT NULL,
  `gioitinh` varchar(225) NOT NULL,
  `sdt` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `thongtinthue`
--

INSERT INTO `thongtinthue` (`mathongtinthue`, `id_thue`, `hinhanhthue`, `diachi`, `ngaysinh`, `cccd`, `gioitinh`, `sdt`) VALUES
(34, 92, 'avatar5.jpg', 'Vũng Tàu', '2001-08-16', '4678765434', 'Nam', '0358496754'),
(35, 93, 'avatar-5.png', 'Quận 5, TPHCM', '1999-07-07', '9847574839', 'Nam', '0354637894'),
(36, 94, 'avatar-2.png', 'Quận 1, TPHCM', '2002-02-07', '4859605849', 'Nam', '0358375643'),
(37, 95, 'avatar-6.png', 'Quận 2, TP.HCM', '2000-11-13', '9374859403', 'Nam', '0358475869'),
(38, 96, 'avatar-7.png', 'Quận 12, TPHCM', '1998-12-16', '3748596857', 'Nam', '0358634723'),
(39, 97, 'avatar8.jpg', 'Tăng nhơn phú', '2004-04-15', '4765869706', 'Nam', '0356486954'),
(40, 98, 'avatar-9.png', 'Quận 9, TPHCM', '2003-02-11', '3467894394', 'Nam', '0357485976'),
(41, 99, 'avatar-12.png', 'Quận 2, TP.HCM', '2001-04-10', '3434675678', 'Nam', '0358863467');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `thothichbaipost`
--

CREATE TABLE `thothichbaipost` (
  `mathothichbaipost` int(11) NOT NULL,
  `ma_posttimtho` int(11) NOT NULL,
  `mathongtintho` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `thothichbaipost`
--

INSERT INTO `thothichbaipost` (`mathothichbaipost`, `ma_posttimtho`, `mathongtintho`) VALUES
(30, 33, 43),
(36, 33, 47),
(43, 33, 49),
(31, 34, 43),
(37, 36, 48),
(41, 36, 49),
(32, 37, 46),
(35, 37, 47),
(40, 37, 49),
(33, 38, 46),
(34, 38, 47),
(38, 39, 48),
(42, 39, 49),
(39, 40, 48);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tho_giaosanpham`
--

CREATE TABLE `tho_giaosanpham` (
  `mathogiaosanpham` int(11) NOT NULL,
  `ma_posttimtho` int(11) NOT NULL,
  `mathongtintho` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tho_giaosanphamtt`
--

CREATE TABLE `tho_giaosanphamtt` (
  `mathogiaosanphamtt` int(11) NOT NULL,
  `ma_posttructiep` int(11) NOT NULL,
  `mathongtintho` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tho_sanpham`
--

CREATE TABLE `tho_sanpham` (
  `mathosanpham` int(11) NOT NULL,
  `ma_posttimtho` int(11) NOT NULL,
  `mathongtintho` int(11) NOT NULL,
  `drive` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `thuchien`
--

CREATE TABLE `thuchien` (
  `mathuchien` int(11) NOT NULL,
  `mathongtintho` int(11) NOT NULL,
  `ma_posttimtho` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `thuchientt`
--

CREATE TABLE `thuchientt` (
  `mathuchientt` int(11) NOT NULL,
  `ma_posttructiep` int(11) NOT NULL,
  `mathongtintho` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `thuethichbaiprofile`
--

CREATE TABLE `thuethichbaiprofile` (
  `ma_thuethichbaiprofile` int(11) NOT NULL,
  `ma_profile` int(11) NOT NULL,
  `mathongtinthue` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `thuethichbaiprofile`
--

INSERT INTO `thuethichbaiprofile` (`ma_thuethichbaiprofile`, `ma_profile`, `mathongtinthue`) VALUES
(20, 31, 41),
(21, 36, 41),
(22, 31, 34),
(23, 40, 34),
(24, 40, 34),
(25, 41, 34),
(26, 20, 41),
(27, 20, 41),
(28, 20, 41),
(29, 20, 41),
(30, 20, 41),
(31, 20, 41),
(32, 20, 41),
(33, 20, 41),
(34, 20, 41),
(35, 20, 41),
(36, 31, 41),
(37, 31, 41),
(38, 31, 41),
(39, 20, 41);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `thue_danhgia`
--

CREATE TABLE `thue_danhgia` (
  `mathuedanhgia` int(11) NOT NULL,
  `ma_posttimtho` int(11) NOT NULL,
  `mathongtintho` int(11) NOT NULL,
  `drive` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `thue_danhgia`
--

INSERT INTO `thue_danhgia` (`mathuedanhgia`, `ma_posttimtho`, `mathongtintho`, `drive`) VALUES
(69, 40, 49, ' https://drive.google.com/drive/folders/1qdQDHywtlxF6OEDlnnRCvIsu-jtRyMDl ');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `thue_nhanlaichinhsua`
--

CREATE TABLE `thue_nhanlaichinhsua` (
  `ma_thuenhanlaichinhsua` int(11) NOT NULL,
  `ma_posttimtho` int(11) NOT NULL,
  `mathongtintho` int(11) NOT NULL,
  `drive` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `thue_nhansanpham`
--

CREATE TABLE `thue_nhansanpham` (
  `ma_thuenhansanpham` int(11) NOT NULL,
  `ma_posttimtho` int(11) NOT NULL,
  `mathongtintho` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `thue_thanhtoancoc`
--

CREATE TABLE `thue_thanhtoancoc` (
  `ma_posttimtho` int(11) NOT NULL,
  `mathongtintho` int(11) NOT NULL,
  `ma_thanhtoancoc` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `thue_thanhtoancoctt`
--

CREATE TABLE `thue_thanhtoancoctt` (
  `mathanhtoancoctt` int(11) NOT NULL,
  `ma_posttructiep` int(11) NOT NULL,
  `mathongtintho` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `thue_thanhtoancoctt`
--

INSERT INTO `thue_thanhtoancoctt` (`mathanhtoancoctt`, `ma_posttructiep`, `mathongtintho`) VALUES
(24, 6, 49);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `yeucauchinhsua`
--

CREATE TABLE `yeucauchinhsua` (
  `mayeucauchinhsua` int(11) NOT NULL,
  `ma_posttimtho` int(11) NOT NULL,
  `mathongtintho` int(11) NOT NULL,
  `drive` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `account_tho`
--
ALTER TABLE `account_tho`
  ADD PRIMARY KEY (`id_tho`);

--
-- Chỉ mục cho bảng `account_thue`
--
ALTER TABLE `account_thue`
  ADD PRIMARY KEY (`id_thue`);

--
-- Chỉ mục cho bảng `baocaochoadmin`
--
ALTER TABLE `baocaochoadmin`
  ADD PRIMARY KEY (`mabaocao`),
  ADD KEY `mathongtintho_rp` (`mathongtintho`),
  ADD KEY `maposttimtho_rp` (`ma_posttimtho`);

--
-- Chỉ mục cho bảng `comment`
--
ALTER TABLE `comment`
  ADD PRIMARY KEY (`comment_id`),
  ADD KEY `post_id` (`post_id`);

--
-- Chỉ mục cho bảng `like`
--
ALTER TABLE `like`
  ADD PRIMARY KEY (`like_id`),
  ADD KEY `post_id` (`post_id`);

--
-- Chỉ mục cho bảng `phanhoitunguoidung`
--
ALTER TABLE `phanhoitunguoidung`
  ADD PRIMARY KEY (`maphanhoitunguoidung`);

--
-- Chỉ mục cho bảng `post`
--
ALTER TABLE `post`
  ADD PRIMARY KEY (`post_id`),
  ADD UNIQUE KEY `post_title` (`post_title`);

--
-- Chỉ mục cho bảng `post_timtho`
--
ALTER TABLE `post_timtho`
  ADD PRIMARY KEY (`ma_posttimtho`),
  ADD KEY `mathongtinthue_post` (`mathongtinthue`);

--
-- Chỉ mục cho bảng `post_tructiep`
--
ALTER TABLE `post_tructiep`
  ADD PRIMARY KEY (`ma_posttructiep`),
  ADD KEY `mathongtinthue` (`mathongtinthue`),
  ADD KEY `maprofile_tt` (`ma_profile`);

--
-- Chỉ mục cho bảng `profile`
--
ALTER TABLE `profile`
  ADD PRIMARY KEY (`ma_profile`),
  ADD UNIQUE KEY `mathongtintho` (`mathongtintho`);

--
-- Chỉ mục cho bảng `quanlybaidang`
--
ALTER TABLE `quanlybaidang`
  ADD PRIMARY KEY (`ma_quanlybaidang`),
  ADD UNIQUE KEY `ma_thongtintho` (`ma_thongtintho`,`ma_posttimtho`),
  ADD KEY `maposttimtho_qlibaidang` (`ma_posttimtho`);

--
-- Chỉ mục cho bảng `quanlyyeucau`
--
ALTER TABLE `quanlyyeucau`
  ADD PRIMARY KEY (`ma_quanlyyeucau`),
  ADD KEY `ma_profile_qlyyeucau` (`ma_profile`),
  ADD KEY `mathongtinthue_qlyyeucau` (`mathongtinthue`);

--
-- Chỉ mục cho bảng `sanpham`
--
ALTER TABLE `sanpham`
  ADD PRIMARY KEY (`masanpham`),
  ADD UNIQUE KEY `mathogiaosanpham` (`mathogiaosanpham`,`mathongtinthue`,`drive`),
  ADD KEY `mathongtinthue_sp` (`mathongtinthue`);

--
-- Chỉ mục cho bảng `sanphamtt`
--
ALTER TABLE `sanphamtt`
  ADD PRIMARY KEY (`masanphamtt`),
  ADD KEY `mathogiaosanphamtt` (`mathogiaosanphamtt`),
  ADD KEY `mathongtinthuesp` (`mathongtinthue`);

--
-- Chỉ mục cho bảng `tacpham`
--
ALTER TABLE `tacpham`
  ADD PRIMARY KEY (`matacpham`),
  ADD KEY `mathongtintho_tp` (`mathongtintho`);

--
-- Chỉ mục cho bảng `thanhtoan`
--
ALTER TABLE `thanhtoan`
  ADD PRIMARY KEY (`mathanhtoan`),
  ADD KEY `maposttimtho_thanhtoan` (`ma_posttimtho`),
  ADD KEY `mathongtintho_thanhtoan` (`mathongtintho`);

--
-- Chỉ mục cho bảng `thochochinhsua`
--
ALTER TABLE `thochochinhsua`
  ADD PRIMARY KEY (`mathochochinhsua`),
  ADD KEY `maposttimtho_chocs` (`ma_posttimtho`),
  ADD KEY `mathongtintho_chocs` (`mathongtintho`);

--
-- Chỉ mục cho bảng `thongtindanhgia`
--
ALTER TABLE `thongtindanhgia`
  ADD PRIMARY KEY (`madanhgia`),
  ADD KEY `mathongtintho_dg` (`mathongtintho`),
  ADD KEY `mathongtinthue_dg` (`mathongtinthue`);

--
-- Chỉ mục cho bảng `thongtintho`
--
ALTER TABLE `thongtintho`
  ADD PRIMARY KEY (`mathongtintho`),
  ADD UNIQUE KEY `id_tho` (`id_tho`);

--
-- Chỉ mục cho bảng `thongtinthue`
--
ALTER TABLE `thongtinthue`
  ADD PRIMARY KEY (`mathongtinthue`),
  ADD UNIQUE KEY `id_thue` (`id_thue`);

--
-- Chỉ mục cho bảng `thothichbaipost`
--
ALTER TABLE `thothichbaipost`
  ADD PRIMARY KEY (`mathothichbaipost`),
  ADD UNIQUE KEY `ma_posttimtho` (`ma_posttimtho`,`mathongtintho`),
  ADD KEY `mathongtintho_post` (`mathongtintho`);

--
-- Chỉ mục cho bảng `tho_giaosanpham`
--
ALTER TABLE `tho_giaosanpham`
  ADD PRIMARY KEY (`mathogiaosanpham`),
  ADD KEY `maposttimtho_giaosp` (`ma_posttimtho`),
  ADD KEY `mathongtintho_giaosp` (`mathongtintho`);

--
-- Chỉ mục cho bảng `tho_giaosanphamtt`
--
ALTER TABLE `tho_giaosanphamtt`
  ADD PRIMARY KEY (`mathogiaosanphamtt`),
  ADD KEY `maposttt_gsp` (`ma_posttructiep`),
  ADD KEY `mathongtintho_gsp` (`mathongtintho`);

--
-- Chỉ mục cho bảng `tho_sanpham`
--
ALTER TABLE `tho_sanpham`
  ADD PRIMARY KEY (`mathosanpham`),
  ADD KEY `maposttimtho_sanpham` (`ma_posttimtho`),
  ADD KEY `mathongtinthue_sanpham` (`drive`),
  ADD KEY `mathongtintho_sanpham` (`mathongtintho`);

--
-- Chỉ mục cho bảng `thuchien`
--
ALTER TABLE `thuchien`
  ADD PRIMARY KEY (`mathuchien`),
  ADD KEY `maqlybaidang_thuchien` (`ma_posttimtho`),
  ADD KEY `mathongtintho_thuchien` (`mathongtintho`);

--
-- Chỉ mục cho bảng `thuchientt`
--
ALTER TABLE `thuchientt`
  ADD PRIMARY KEY (`mathuchientt`),
  ADD KEY `maposttt_th` (`ma_posttructiep`),
  ADD KEY `mathongtintho_th` (`mathongtintho`);

--
-- Chỉ mục cho bảng `thuethichbaiprofile`
--
ALTER TABLE `thuethichbaiprofile`
  ADD PRIMARY KEY (`ma_thuethichbaiprofile`),
  ADD KEY `profile_pr` (`ma_profile`),
  ADD KEY `mathongtinthue_pr` (`mathongtinthue`);

--
-- Chỉ mục cho bảng `thue_danhgia`
--
ALTER TABLE `thue_danhgia`
  ADD PRIMARY KEY (`mathuedanhgia`),
  ADD UNIQUE KEY `ma_posttimtho` (`ma_posttimtho`,`mathongtintho`),
  ADD KEY `mathongtintho_danhgia` (`mathongtintho`);

--
-- Chỉ mục cho bảng `thue_nhanlaichinhsua`
--
ALTER TABLE `thue_nhanlaichinhsua`
  ADD PRIMARY KEY (`ma_thuenhanlaichinhsua`),
  ADD UNIQUE KEY `ma_posttimtho` (`ma_posttimtho`,`mathongtintho`),
  ADD KEY `mathongtintho_nhanlai` (`mathongtintho`);

--
-- Chỉ mục cho bảng `thue_nhansanpham`
--
ALTER TABLE `thue_nhansanpham`
  ADD PRIMARY KEY (`ma_thuenhansanpham`),
  ADD KEY `maposttimtho_nhansp` (`ma_posttimtho`),
  ADD KEY `mathongtintho_nhansp` (`mathongtintho`);

--
-- Chỉ mục cho bảng `thue_thanhtoancoc`
--
ALTER TABLE `thue_thanhtoancoc`
  ADD PRIMARY KEY (`ma_thanhtoancoc`),
  ADD UNIQUE KEY `ma_posttimtho` (`ma_posttimtho`,`mathongtintho`),
  ADD KEY `mathongtintho_thanhtoancoc` (`mathongtintho`);

--
-- Chỉ mục cho bảng `thue_thanhtoancoctt`
--
ALTER TABLE `thue_thanhtoancoctt`
  ADD PRIMARY KEY (`mathanhtoancoctt`),
  ADD KEY `maposttt` (`ma_posttructiep`),
  ADD KEY `mathongtintho_tt` (`mathongtintho`);

--
-- Chỉ mục cho bảng `yeucauchinhsua`
--
ALTER TABLE `yeucauchinhsua`
  ADD PRIMARY KEY (`mayeucauchinhsua`),
  ADD UNIQUE KEY `ma_posttimtho` (`ma_posttimtho`,`mathongtintho`),
  ADD KEY `mathongtintho_chinhsua` (`mathongtintho`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `account_tho`
--
ALTER TABLE `account_tho`
  MODIFY `id_tho` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=122;

--
-- AUTO_INCREMENT cho bảng `account_thue`
--
ALTER TABLE `account_thue`
  MODIFY `id_thue` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=126;

--
-- AUTO_INCREMENT cho bảng `baocaochoadmin`
--
ALTER TABLE `baocaochoadmin`
  MODIFY `mabaocao` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT cho bảng `comment`
--
ALTER TABLE `comment`
  MODIFY `comment_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT cho bảng `like`
--
ALTER TABLE `like`
  MODIFY `like_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT cho bảng `phanhoitunguoidung`
--
ALTER TABLE `phanhoitunguoidung`
  MODIFY `maphanhoitunguoidung` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT cho bảng `post`
--
ALTER TABLE `post`
  MODIFY `post_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;

--
-- AUTO_INCREMENT cho bảng `post_timtho`
--
ALTER TABLE `post_timtho`
  MODIFY `ma_posttimtho` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT cho bảng `post_tructiep`
--
ALTER TABLE `post_tructiep`
  MODIFY `ma_posttructiep` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT cho bảng `profile`
--
ALTER TABLE `profile`
  MODIFY `ma_profile` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50;

--
-- AUTO_INCREMENT cho bảng `quanlybaidang`
--
ALTER TABLE `quanlybaidang`
  MODIFY `ma_quanlybaidang` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=188;

--
-- AUTO_INCREMENT cho bảng `quanlyyeucau`
--
ALTER TABLE `quanlyyeucau`
  MODIFY `ma_quanlyyeucau` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT cho bảng `sanpham`
--
ALTER TABLE `sanpham`
  MODIFY `masanpham` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=68;

--
-- AUTO_INCREMENT cho bảng `sanphamtt`
--
ALTER TABLE `sanphamtt`
  MODIFY `masanphamtt` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT cho bảng `tacpham`
--
ALTER TABLE `tacpham`
  MODIFY `matacpham` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT cho bảng `thanhtoan`
--
ALTER TABLE `thanhtoan`
  MODIFY `mathanhtoan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT cho bảng `thochochinhsua`
--
ALTER TABLE `thochochinhsua`
  MODIFY `mathochochinhsua` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=67;

--
-- AUTO_INCREMENT cho bảng `thongtindanhgia`
--
ALTER TABLE `thongtindanhgia`
  MODIFY `madanhgia` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;

--
-- AUTO_INCREMENT cho bảng `thongtintho`
--
ALTER TABLE `thongtintho`
  MODIFY `mathongtintho` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50;

--
-- AUTO_INCREMENT cho bảng `thongtinthue`
--
ALTER TABLE `thongtinthue`
  MODIFY `mathongtinthue` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- AUTO_INCREMENT cho bảng `thothichbaipost`
--
ALTER TABLE `thothichbaipost`
  MODIFY `mathothichbaipost` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;

--
-- AUTO_INCREMENT cho bảng `tho_giaosanpham`
--
ALTER TABLE `tho_giaosanpham`
  MODIFY `mathogiaosanpham` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=67;

--
-- AUTO_INCREMENT cho bảng `tho_giaosanphamtt`
--
ALTER TABLE `tho_giaosanphamtt`
  MODIFY `mathogiaosanphamtt` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT cho bảng `tho_sanpham`
--
ALTER TABLE `tho_sanpham`
  MODIFY `mathosanpham` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=80;

--
-- AUTO_INCREMENT cho bảng `thuchien`
--
ALTER TABLE `thuchien`
  MODIFY `mathuchien` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=77;

--
-- AUTO_INCREMENT cho bảng `thuchientt`
--
ALTER TABLE `thuchientt`
  MODIFY `mathuchientt` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT cho bảng `thuethichbaiprofile`
--
ALTER TABLE `thuethichbaiprofile`
  MODIFY `ma_thuethichbaiprofile` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT cho bảng `thue_danhgia`
--
ALTER TABLE `thue_danhgia`
  MODIFY `mathuedanhgia` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=70;

--
-- AUTO_INCREMENT cho bảng `thue_nhanlaichinhsua`
--
ALTER TABLE `thue_nhanlaichinhsua`
  MODIFY `ma_thuenhanlaichinhsua` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `thue_nhansanpham`
--
ALTER TABLE `thue_nhansanpham`
  MODIFY `ma_thuenhansanpham` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT cho bảng `thue_thanhtoancoc`
--
ALTER TABLE `thue_thanhtoancoc`
  MODIFY `ma_thanhtoancoc` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=302;

--
-- AUTO_INCREMENT cho bảng `thue_thanhtoancoctt`
--
ALTER TABLE `thue_thanhtoancoctt`
  MODIFY `mathanhtoancoctt` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT cho bảng `yeucauchinhsua`
--
ALTER TABLE `yeucauchinhsua`
  MODIFY `mayeucauchinhsua` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=57;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `baocaochoadmin`
--
ALTER TABLE `baocaochoadmin`
  ADD CONSTRAINT `maposttimtho_rp` FOREIGN KEY (`ma_posttimtho`) REFERENCES `post_timtho` (`ma_posttimtho`),
  ADD CONSTRAINT `mathongtintho_rp` FOREIGN KEY (`mathongtintho`) REFERENCES `thongtintho` (`mathongtintho`);

--
-- Các ràng buộc cho bảng `comment`
--
ALTER TABLE `comment`
  ADD CONSTRAINT `comment_ibfk_1` FOREIGN KEY (`post_id`) REFERENCES `post` (`post_id`);

--
-- Các ràng buộc cho bảng `like`
--
ALTER TABLE `like`
  ADD CONSTRAINT `like_ibfk_1` FOREIGN KEY (`post_id`) REFERENCES `post` (`post_id`);

--
-- Các ràng buộc cho bảng `post_timtho`
--
ALTER TABLE `post_timtho`
  ADD CONSTRAINT `mathongtinthue_post` FOREIGN KEY (`mathongtinthue`) REFERENCES `thongtinthue` (`mathongtinthue`);

--
-- Các ràng buộc cho bảng `post_tructiep`
--
ALTER TABLE `post_tructiep`
  ADD CONSTRAINT `maprofile_tt` FOREIGN KEY (`ma_profile`) REFERENCES `profile` (`ma_profile`),
  ADD CONSTRAINT `mathongtinthue` FOREIGN KEY (`mathongtinthue`) REFERENCES `thongtinthue` (`mathongtinthue`);

--
-- Các ràng buộc cho bảng `profile`
--
ALTER TABLE `profile`
  ADD CONSTRAINT `mathongtintho_profile` FOREIGN KEY (`mathongtintho`) REFERENCES `thongtintho` (`mathongtintho`);

--
-- Các ràng buộc cho bảng `quanlybaidang`
--
ALTER TABLE `quanlybaidang`
  ADD CONSTRAINT `maposttimtho_qlibaidang` FOREIGN KEY (`ma_posttimtho`) REFERENCES `post_timtho` (`ma_posttimtho`),
  ADD CONSTRAINT `mathongtintho_qlbaidang` FOREIGN KEY (`ma_thongtintho`) REFERENCES `thongtintho` (`mathongtintho`);

--
-- Các ràng buộc cho bảng `quanlyyeucau`
--
ALTER TABLE `quanlyyeucau`
  ADD CONSTRAINT `ma_profile_qlyyeucau` FOREIGN KEY (`ma_profile`) REFERENCES `profile` (`ma_profile`),
  ADD CONSTRAINT `mathongtinthue_qlyyeucau` FOREIGN KEY (`mathongtinthue`) REFERENCES `thongtinthue` (`mathongtinthue`);

--
-- Các ràng buộc cho bảng `sanpham`
--
ALTER TABLE `sanpham`
  ADD CONSTRAINT `mathogiaosp_sp` FOREIGN KEY (`mathogiaosanpham`) REFERENCES `tho_giaosanpham` (`mathogiaosanpham`),
  ADD CONSTRAINT `mathongtinthue_sp` FOREIGN KEY (`mathongtinthue`) REFERENCES `thongtinthue` (`mathongtinthue`);

--
-- Các ràng buộc cho bảng `sanphamtt`
--
ALTER TABLE `sanphamtt`
  ADD CONSTRAINT `mathogiaosanphamtt` FOREIGN KEY (`mathogiaosanphamtt`) REFERENCES `tho_giaosanphamtt` (`mathogiaosanphamtt`),
  ADD CONSTRAINT `mathongtinthuesp` FOREIGN KEY (`mathongtinthue`) REFERENCES `thongtinthue` (`mathongtinthue`);

--
-- Các ràng buộc cho bảng `tacpham`
--
ALTER TABLE `tacpham`
  ADD CONSTRAINT `mathongtintho_tp` FOREIGN KEY (`mathongtintho`) REFERENCES `thongtintho` (`mathongtintho`);

--
-- Các ràng buộc cho bảng `thanhtoan`
--
ALTER TABLE `thanhtoan`
  ADD CONSTRAINT `maposttimtho_thanhtoan` FOREIGN KEY (`ma_posttimtho`) REFERENCES `post_timtho` (`ma_posttimtho`),
  ADD CONSTRAINT `mathongtintho_thanhtoan` FOREIGN KEY (`mathongtintho`) REFERENCES `thongtintho` (`mathongtintho`);

--
-- Các ràng buộc cho bảng `thochochinhsua`
--
ALTER TABLE `thochochinhsua`
  ADD CONSTRAINT `maposttimtho_chocs` FOREIGN KEY (`ma_posttimtho`) REFERENCES `post_timtho` (`ma_posttimtho`),
  ADD CONSTRAINT `mathongtintho_chocs` FOREIGN KEY (`mathongtintho`) REFERENCES `thongtintho` (`mathongtintho`);

--
-- Các ràng buộc cho bảng `thongtindanhgia`
--
ALTER TABLE `thongtindanhgia`
  ADD CONSTRAINT `mathongtintho_dg` FOREIGN KEY (`mathongtintho`) REFERENCES `thongtintho` (`mathongtintho`),
  ADD CONSTRAINT `mathongtinthue_dg` FOREIGN KEY (`mathongtinthue`) REFERENCES `thongtinthue` (`mathongtinthue`);

--
-- Các ràng buộc cho bảng `thongtintho`
--
ALTER TABLE `thongtintho`
  ADD CONSTRAINT `accounttho_thongtintho` FOREIGN KEY (`id_tho`) REFERENCES `account_tho` (`id_tho`);

--
-- Các ràng buộc cho bảng `thongtinthue`
--
ALTER TABLE `thongtinthue`
  ADD CONSTRAINT `mathongtinthue_cons` FOREIGN KEY (`id_thue`) REFERENCES `account_thue` (`id_thue`);

--
-- Các ràng buộc cho bảng `thothichbaipost`
--
ALTER TABLE `thothichbaipost`
  ADD CONSTRAINT `maposttimtho_post` FOREIGN KEY (`ma_posttimtho`) REFERENCES `post_timtho` (`ma_posttimtho`),
  ADD CONSTRAINT `mathongtintho_post` FOREIGN KEY (`mathongtintho`) REFERENCES `thongtintho` (`mathongtintho`);

--
-- Các ràng buộc cho bảng `tho_giaosanpham`
--
ALTER TABLE `tho_giaosanpham`
  ADD CONSTRAINT `maposttimtho_giaosp` FOREIGN KEY (`ma_posttimtho`) REFERENCES `post_timtho` (`ma_posttimtho`),
  ADD CONSTRAINT `mathongtintho_giaosp` FOREIGN KEY (`mathongtintho`) REFERENCES `thongtintho` (`mathongtintho`);

--
-- Các ràng buộc cho bảng `tho_giaosanphamtt`
--
ALTER TABLE `tho_giaosanphamtt`
  ADD CONSTRAINT `maposttt_gsp` FOREIGN KEY (`ma_posttructiep`) REFERENCES `post_tructiep` (`ma_posttructiep`),
  ADD CONSTRAINT `mathongtintho_gsp` FOREIGN KEY (`mathongtintho`) REFERENCES `thongtintho` (`mathongtintho`);

--
-- Các ràng buộc cho bảng `tho_sanpham`
--
ALTER TABLE `tho_sanpham`
  ADD CONSTRAINT `maposttimtho_sanpham` FOREIGN KEY (`ma_posttimtho`) REFERENCES `post_timtho` (`ma_posttimtho`),
  ADD CONSTRAINT `mathongtintho_sanpham` FOREIGN KEY (`mathongtintho`) REFERENCES `thongtintho` (`mathongtintho`);

--
-- Các ràng buộc cho bảng `thuchien`
--
ALTER TABLE `thuchien`
  ADD CONSTRAINT `maqlybaidang_thuchien` FOREIGN KEY (`ma_posttimtho`) REFERENCES `post_timtho` (`ma_posttimtho`),
  ADD CONSTRAINT `mathongtintho_thuchien` FOREIGN KEY (`mathongtintho`) REFERENCES `thongtintho` (`mathongtintho`);

--
-- Các ràng buộc cho bảng `thuchientt`
--
ALTER TABLE `thuchientt`
  ADD CONSTRAINT `maposttt_th` FOREIGN KEY (`ma_posttructiep`) REFERENCES `post_tructiep` (`ma_posttructiep`),
  ADD CONSTRAINT `mathongtintho_th` FOREIGN KEY (`mathongtintho`) REFERENCES `post_timtho` (`ma_posttimtho`);

--
-- Các ràng buộc cho bảng `thuethichbaiprofile`
--
ALTER TABLE `thuethichbaiprofile`
  ADD CONSTRAINT `mathongtinthue_pr` FOREIGN KEY (`mathongtinthue`) REFERENCES `thongtinthue` (`mathongtinthue`),
  ADD CONSTRAINT `profile_pr` FOREIGN KEY (`ma_profile`) REFERENCES `profile` (`ma_profile`);

--
-- Các ràng buộc cho bảng `thue_danhgia`
--
ALTER TABLE `thue_danhgia`
  ADD CONSTRAINT `maposttimtho_danhgia` FOREIGN KEY (`ma_posttimtho`) REFERENCES `post_timtho` (`ma_posttimtho`),
  ADD CONSTRAINT `mathongtintho_danhgia` FOREIGN KEY (`mathongtintho`) REFERENCES `thongtintho` (`mathongtintho`);

--
-- Các ràng buộc cho bảng `thue_nhanlaichinhsua`
--
ALTER TABLE `thue_nhanlaichinhsua`
  ADD CONSTRAINT `maposttimtho_nhanlai` FOREIGN KEY (`ma_posttimtho`) REFERENCES `post_timtho` (`ma_posttimtho`),
  ADD CONSTRAINT `mathongtintho_nhanlai` FOREIGN KEY (`mathongtintho`) REFERENCES `thongtintho` (`mathongtintho`);

--
-- Các ràng buộc cho bảng `thue_nhansanpham`
--
ALTER TABLE `thue_nhansanpham`
  ADD CONSTRAINT `maposttimtho_nhansp` FOREIGN KEY (`ma_posttimtho`) REFERENCES `post_timtho` (`ma_posttimtho`),
  ADD CONSTRAINT `mathongtintho_nhansp` FOREIGN KEY (`mathongtintho`) REFERENCES `thongtintho` (`mathongtintho`);

--
-- Các ràng buộc cho bảng `thue_thanhtoancoc`
--
ALTER TABLE `thue_thanhtoancoc`
  ADD CONSTRAINT `maposttimtho_thanhtoancoc` FOREIGN KEY (`ma_posttimtho`) REFERENCES `post_timtho` (`ma_posttimtho`),
  ADD CONSTRAINT `mathongtintho_thanhtoancoc` FOREIGN KEY (`mathongtintho`) REFERENCES `thongtintho` (`mathongtintho`);

--
-- Các ràng buộc cho bảng `thue_thanhtoancoctt`
--
ALTER TABLE `thue_thanhtoancoctt`
  ADD CONSTRAINT `maposttt` FOREIGN KEY (`ma_posttructiep`) REFERENCES `post_tructiep` (`ma_posttructiep`),
  ADD CONSTRAINT `mathongtintho_tt` FOREIGN KEY (`mathongtintho`) REFERENCES `thongtintho` (`mathongtintho`);

--
-- Các ràng buộc cho bảng `yeucauchinhsua`
--
ALTER TABLE `yeucauchinhsua`
  ADD CONSTRAINT `maposttimtho_chinhsua` FOREIGN KEY (`ma_posttimtho`) REFERENCES `post_timtho` (`ma_posttimtho`),
  ADD CONSTRAINT `mathongtintho_chinhsua` FOREIGN KEY (`mathongtintho`) REFERENCES `thongtintho` (`mathongtintho`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
