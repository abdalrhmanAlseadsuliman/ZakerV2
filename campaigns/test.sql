CREATE TABLE IF NOT EXISTS campaigns (
      id INT AUTO_INCREMENT PRIMARY KEY,
      titleEnglish VARCHAR(255) NOT NULL,
      titleArabic VARCHAR(255) NOT NULL,
      subtitleCounter VARCHAR(255) NOT NULL,
      mainTitle TEXT NOT NULL,
      mainParag TEXT NOT NULL,
      title2 TEXT NOT NULL,
      title3 TEXT NOT NULL,
      nawaya TEXT NOT NULL,
      title4 TEXT NOT NULL,
      titleVideo1 TEXT NOT NULL,
      titleVideo2 TEXT NOT NULL,
      titleVideo3 TEXT NOT NULL,
      embedLink1 TEXT NOT NULL,
      embedLink2 TEXT NOT NULL,
      embedLink3 TEXT NOT NULL,
      linkVideo1 TEXT NOT NULL,
      linkVideo2 TEXT NOT NULL,
      linkVideo3 TEXT NOT NULL,
      endTitle TEXT NOT NULL,
      dateCampaign TEXT NOT NULL,
      status VARCHAR(20) NOT NULL,
      status_value INT NOT NULL,
      image_names TEXT);

INSERT INTO campaigns (
    id,
    titleEnglish,
    titleArabic,
    subtitleCounter,
    mainTitle,
    mainParag,
    title2,
    title3,
    nawaya,
    title4,
    titleVideo1,
    titleVideo2,
    titleVideo3,
    embedLink1,
    embedLink2,
    embedLink3,
    linkVideo1,
    linkVideo2,
    linkVideo3,
    endTitle,
    dateCampaign,
    status,
    status_value,
    image_names
  )
VALUES (
    id:int,
    'titleEnglish:varchar',
    'titleArabic:varchar',
    'subtitleCounter:varchar',
    'mainTitle:text',
    'mainParag:text',
    'title2:text',
    'title3:text',
    'nawaya:text',
    'title4:text',
    'titleVideo1:text',
    'titleVideo2:text',
    'titleVideo3:text',
    'embedLink1:text',
    'embedLink2:text',
    'embedLink3:text',
    'linkVideo1:text',
    'linkVideo2:text',
    'linkVideo3:text',
    'endTitle:text',
    'dateCampaign:text',
    'status:varchar',
    status_value:int,
    'image_names:text'
  );

TRUNCATE `SchedulePrayers` 

ALTER TABLE SchedulePrayers
ADD campaign_id int,
ADD CONSTRAINT campaign_Prayers
FOREIGN KEY (campaign_id)
REFERENCES campaigns (id);  


ALTER TABLE SchedulePrayers
MODIFY campaign_id int NOT NULL;


ALTER TABLE campaigns DROP COLUMN titleEnglish;
ALTER TABLE campaigns ADD CONSTRAINT unique_constraint_titleAr UNIQUE (titleArabic);

SELECT titleArabic, COUNT(*) FROM campaigns GROUP BY titleArabic HAVING COUNT(*) > 1;

DELETE FROM campaigns WHERE titleArabic IN (SELECT titleArabic FROM (SELECT titleArabic, ROW_NUMBER() OVER( PARTITION BY titleArabic ORDER BY titleArabic) AS duplicate_count FROM campaigns) AS duplicates WHERE duplicate_count > 1);


SELECT COUNT(*) AS 'count1' FROM campaigns WHERE titleArabic = 'test'