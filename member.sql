create table members (
	/* members 이름을 가진 테이블을 만들겠다 */
    num int not null auto_increment,
	/* num 필드 생성, 정수형, 빈값 허용X, 레코드 생성 시 자동 추가 */
    id char(12) not null,
	/* id 필드 생성, 문자형, 12글자 허용, 빈값 허용X */
    pw char(12) not null,
	name varchar(20) not null,
    email varchar(80) not null,
    regist_day char(21) not null,
    primary key(num)
	/* num필드를 기본키 설정 */
);


