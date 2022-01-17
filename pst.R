library(tidyverse)
library(readxl)
library(prophet)
library(lubridate)
setwd("/Users/Bak-L/Documents/Cours Esiea/PST4")
data <- read_excel("dataV1.xlsx")

df <- data_1a <- data[206:540, ] 

df <- mutate (df, date = ymd_hms(X_time) )
df <- mutate (df, ds = date, y = nextpm_pm25)
df <- column_to_rownames(df, var = "date")


m <- prophet(df)
future <- make_future_dataframe(m, periods = 4)
tail(future)

forecast <- predict(m, future)
tail(forecast[c('ds','yhat','yhat_lower','yhat_upper')])
plot(m, forecast)

args <- commandArgs(TRUE)     
N <- args[1]    
x <- rnorm(N,0,1)     
png(filename="temp.png", width=500, height=500)
hist(x, col="lightblue")    
dev.off()

#dyplot.prophet(m,forecast)

#data<- mutate (data, ds = date, y = bme680_IAQ)
#data <- column_to_rownames(data, var = "date")

#data<- mutate (data, ds = date, y = nextpm_pm1)
#data <- column_to_rownames(data, var = "date")

#data<- mutate (data, ds = date, y = nextpm_pm25)
#data <- column_to_rownames(data, var = "date")

#data<- mutate (data, ds = date, y = bme680_gas/KOhms)
#data <- column_to_rownames(data, var = "date")

#data<- mutate (data, ds = date, y = bme680_humidity)
#data <- column_to_rownames(data, var = "date")

#data<- mutate (data, ds = date, y = bme680_pressure)
#data <- column_to_rownames(data, var = "date")

#data<- mutate (data, ds = date, y = bme680_rawHumidity)
#data <- column_to_rownames(data, var = "date")

