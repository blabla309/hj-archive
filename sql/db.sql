DROP TABLE like_post;
DROP TABLE like_comment;
DROP TABLE comment;
DROP TABLE post;
DROP TABLE category;
DROP TABLE admin;
DROP TABLE member;

CREATE TABLE member(
    no SERIAL NOT NULL,
    email VARCHAR(50) NOT NULL,
    password VARCHAR(50) NOT NULL,
    reg_date TIMESTAMP DEFAULT NOW(),
    upd_date TIMESTAMP,
    nickname VARCHAR(30) NOT NULL,
    use_tf BOOLEAN DEFAULT true
);

ALTER TABLE member ADD PRIMARY KEY (no);


CREATE TABLE admin(
    member_no INTEGER NOT NULL,
    lv INTEGER DEFAULT 1,
    reg_date TIMESTAMP DEFAULT NOW()
);

ALTER TABLE admin ADD CONSTRAINT admin_fk_member_no FOREIGN KEY (member_no) REFERENCES member (no);


CREATE TABLE category(
    no SERIAL NOT NULL,
    name VARCHAR(50),
    parent_no INTEGER,
    category_order INTEGER DEFAULT 0,
    reg_date TIMESTAMP DEFAULT NOW(),
    depth INTEGER DEFAULT 0,
    use_tf BOOLEAN DEFAULT true
);

ALTER TABLE category ADD PRIMARY KEY (no);
ALTER TABLE category ADD CONSTRAINT category_fk_category_no FOREIGN key (parent_no) REFERENCES category (no);

CREATE TABLE post(
    no SERIAL NOT NULL,
    title VARCHAR(100),
    content TEXT,
    category_no INTEGER,
    hit_count INTEGER DEFAULT 0,
    like_count INTEGER DEFAULT 0,
    comment_count INTEGER DEFAULT 0,
    ust_tf BOOLEAN DEFAULT true,
    public_tf BOOLEAN DEFAULT true,
    reg_date TIMESTAMP DEFAULT NOW(),
    upd_date TIMESTAMP
);

ALTER TABLE post ADD PRIMARY KEY (no);
ALTER TABLE post ADD CONSTRAINT post_fk_category_no FOREIGN KEY (category_no) REFERENCES category (no);

CREATE TABLE comment(
    no SERIAL NOT NULL,
    post_no INTEGER NOT NULL,
    type VARCHAR(20),
    content VARCHAR(500),
    reg_date TIMESTAMP DEFAULT NOW(),
    upd_date TIMESTAMP,
    member_no INTEGER,
    member_tf BOOLEAN,
    use_tf BOOLEAN DEFAULT true,
    public_tf BOOLEAN DEFAULT true,
    nickname VARCHAR(30),
    password VARCHAR(50)
);

ALTER TABLE comment ADD CONSTRAINT comment_fk_post_no FOREIGN KEY (post_no) REFERENCES post (no);
ALTER TABLE comment ADD CONSTRAINT comment_fk_member_no FOREIGN KEY (member_no) REFERENCES member (no);
ALTER TABLE comment ADD PRIMARY KEY (no);

CREATE TABLE like_post(
    member_no INTEGER NOT NULL,
    post_no INTEGER NOT NULL
);

ALTER TABLE like_post ADD  CONSTRAINT like_post_fk_member_no FOREIGN KEY (member_no) REFERENCES member (no);
ALTER TABLE like_post ADD  CONSTRAINT like_post_fk_post_no FOREIGN KEY (post_no) REFERENCES post (no);
ALTER TABLE like_post ADD PRIMARY KEY (member_no, post_no);

CREATE TABLE like_comment(
    member_no INTEGER NOT NULL,
    comment_no INTEGER NOT NULL
);

ALTER TABLE like_comment ADD CONSTRAINT like_comment_fk_member_no FOREIGN KEY (member_no) REFERENCES member (no);
ALTER TABLE like_comment ADD CONSTRAINT like_comment_fk_comment_no FOREIGN KEY (comment_no) REFERENCES comment (no);
ALTER TABLE like_comment ADD PRIMARY KEY (member_no, comment_no);